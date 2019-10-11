<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getProducts($conditions = [])
    {
        $products = Product::all();

        return $products->where($conditions[0], $conditions[1]);
    }

}
