<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;
class News extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "public/news";
        $image = Image::make($value)->encode('jpg', 90);
        $filename = md5($value . time()) . '.jpg';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }

    public function getImageAttribute($value)
    {
        return str_replace('storage/news', 'news', $value);
    }
}
