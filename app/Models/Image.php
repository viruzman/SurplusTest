<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='image';
    protected $fillable = ['id', 'name', 'file', 'enable'];
    protected $dates = ['deleted_at'];

    public function Product()
    {
        return $this->belongsToMany(Product::class,
            'product_image',
            'image_id',
            'product_id');
    }
}
