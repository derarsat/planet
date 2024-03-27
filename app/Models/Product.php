<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

class Product extends Model
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
        'story',
        'history',
        'brand_id',
        'image',
        'brand',
        'heroImage',
        'historyImage',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',

    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class,"brand_id","id");

    }

    public function productFlavors()
    {
        return $this->hasMany(ProductFlavor::class);
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "public/products";
        $image = Image::make($value)->encode('png', 90);
        $filename = md5($value . time()) . '.png';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }

    public function setheroImageAttribute($value)
    {
        $attribute_name = "heroImage";
        $destination_path = "public/products";
        $image = Image::make($value)->encode('png', 90);
        $filename = md5($value . time()) . '.png';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }

    public function sethistoryImageAttribute($value)
    {
        $attribute_name = "historyImage";
        $destination_path = "public/products";
        $image = Image::make($value)->encode('png', 90);
        $filename = md5($value . time()) . '.png';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }


    public function getImageAttribute($value)
    {
        return str_replace('storage/products', 'products', $value);
    }

    public function getheroImageAttribute($value)
    {
        return str_replace('storage/products', 'products', $value);
    }

    public function gethistoryImageAttribute($value)
    {
        return str_replace('storage/products', 'products', $value);
    }
}
