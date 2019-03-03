<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'products_id';
    protected $guarded = ['created_at', 'updated_at'];
}
