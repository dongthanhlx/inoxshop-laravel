<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Demo2Controller extends Controller
{
    public function index()
    {
        $products = new Product();
        foreach ($products->getProducts(6) as $product)
        {
            echo $product->name . '<br />';
        }
    }
}
