<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;
class Brand extends Model
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
        'category',
        'image',
        'greyscaleImage',
        'description',
        'hero',
        'greyscaleHero',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "public/brands";
        $image = Image::make($value)->encode('png', 90);
        $filename = md5($value . time()) . '.png';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }

    public function setGreyscaleImageAttribute($value)
    {
        $attribute_name = "greyscaleImage";
        $destination_path = "public/brands";
        $image = Image::make($value)->encode('png', 90);
        $filename = md5($value . time()) . '.png';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replace('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }

    public function getImageAttribute($value)
    {
        return str_replace('storage/brands', 'brands', $value);
    }
    public function getGreyscaleImageAttribute($value)
    {
        return str_replace('storage/brands', 'brands', $value);
    }


    public function getHeroAttribute($value)
    {
        return str_replace('storage/brands', 'brands', $value);
    }
    public function getGreyscaleHeroAttribute($value)
    {
        return str_replace('storage/brands', 'brands', $value);
    }




    public function setGreyscaleHeroAttribute($value)
    {
        $attribute_name = "greyscaleHero";
        $destination_path = "public/brands";
        $image = Image::make($value)->encode('png', 90);
        $filename = md5($value . time()) . '.png';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replace('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }



    public function setHeroAttribute($value)
    {
        $attribute_name = "hero";
        $destination_path = "public/brands";
        $image = Image::make($value)->encode('png', 90);
        $filename = md5($value . time()) . '.png';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replace('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }
}
