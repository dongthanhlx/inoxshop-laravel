<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function fetch(Request $request)
    {
        if ($request->get('query'))
        {
            $query = $request->get('query');

            $productObject = new Product();
            $products = $productObject->get(['name', 'LIKE', "%{$query}%"]);

            $categoryObject = new Category();
            $categories = $categoryObject->get(['name', 'LIKE', "%{$query}%"]);

            $output = '<ul class="dropdown-menu" style="display: block; position: relative">';
            foreach ($categories as $category)
            {
                if ($category->parent_id == 0) continue;

                $output .= "
                    <li><a href='../products/$category->slug' class='dropdown-item'>" . $category->name . "</a></li>
                ";
            }

            foreach ($products as $product)
            {
                $category = $categoryObject->getCategoryByID($product->category_id);
                $slugCategory = $category->slug;
                $output .= "
                    <li><a href='../products/$slugCategory#$product->slug' class='dropdown-item'>" . $product->name . "</a></li>
                ";
            }
            $output .= '</ul>';

            echo $output;
        }
    }
}
