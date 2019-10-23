<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function fetch(Request $request)
    {
        if ($request->get('query'))
        {
            $query = $request->get('query');
            $products = DB::table('products')
                ->where('name', 'LIKE', "%{$query}%")
                ->get();

            $categories = DB::table('categories')
                ->where('name', 'LIKE', "%{$query}%")
                ->get();

            $output = '<ul class="dropdown-menu" style="display: block; position: relative">';
            foreach ($categories as $category)
            {
                $output .= "
                    <li><a href='../products/$category->slug' class='dropdown-item'>" . $category->name . "</a></li>
                ";
            }

            $categoryObject = new Category();
            foreach ($products as $product)
            {
                $category = $categoryObject->getCategoryByID($product->category_id);
                $slugCategory = $category->first()->slug;
                $output .= "
                    <li><a href='../products/$slugCategory#$product->slug' class='dropdown-item'>" . $product->name . "</a></li>
                ";
            }
            $output .= '</ul>';

            echo $output;
        }
    }


    /**
     * Show the form for crea1ting a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
