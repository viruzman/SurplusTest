<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;

    protected $table='product';
    protected $fillable = ['id', 'name', 'description', 'enable'];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsToMany(Category::class,
            'category_product',
            'product_id',
            'category_id');
    }

    public function image()
    {
        return $this->belongsToMany(Image::class,
            'product_image',
            'product_id',
            'image_id');
    }
}
