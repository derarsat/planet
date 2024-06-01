<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandsHero extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "public/brands-heroes";
        $image = Image::make($value)->encode('png', 90);
        $filename = md5($value . time()) . '.png';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }
    public function getImageAttribute($value)
    {
        return str_replace('storage/brands-heroes', 'brands-heroes', $value);
    }
}
