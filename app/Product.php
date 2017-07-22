<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'sku', 'price', 'status', 'quality_approved', 'image_url', 'brand'];

    public $primaryKey = 'id';
    public $timestamps = false;
}