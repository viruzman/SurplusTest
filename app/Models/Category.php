<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='category';
    protected $fillable = ['id', 'name', 'enable'];
    protected $dates = ['deleted_at'];

    public function product()
    {
        return $this->belongsToMany(Product::class,
            'category_product',
            'category_id',
            'product_id');
    }
}
