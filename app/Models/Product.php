<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name_product
 * @property $description_product
 * @property $stock_product
 * @property $category_product
 * @property $price_product
 * @property $image_product
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name_product' => 'required',
		'description_product' => 'required',
		'stock_product' => 'required',
		'category_product' => 'required',
		'price_product' => 'required',
		'image_product' => 'required',
    ];

    protected $perPage = 200;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_product','description_product','stock_product','category_product','price_product','image_product'];



}
