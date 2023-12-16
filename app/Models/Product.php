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
        'image',
        'brand',
        'heroImage',
        'productHistoryImage',
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
        return $this->belongsTo(Brand::class);
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "public/products";
        $image = Image::make($value)->encode('jpg', 90);
        $filename = md5($value . time()) . '.jpg';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }

    public function setheroImageAttribute($value)
    {
        $attribute_name = "heroImage";
        $destination_path = "public/products";
        $image = Image::make($value)->encode('jpg', 90);
        $filename = md5($value . time()) . '.jpg';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }

    public function setproductHistoryImageImageAttribute($value)
    {
        $attribute_name = "productHistoryImage";
        $destination_path = "public/products";
        $image = Image::make($value)->encode('jpg', 90);
        $filename = md5($value . time()) . '.jpg';
        Storage::put($destination_path . '/' . $filename, $image->stream());
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    }


    public function getImageAttribute($value)
    {
    return str_replace('storage/products', 'products', $value);
    }
    public function getHeroImageAttribute($value)
    {
        return str_replace('storage/products', 'products', $value);
    }

    public function getProductHistoryImageAttribute($value)
    {
        return str_replace('storage/products', 'products', $value);
    }
}
