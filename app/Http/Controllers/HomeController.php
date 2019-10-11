<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = new Page();
        $content = $page->getContent('home');
        $this->loadAllDataCategory();
        return $this->render('home', ['content' => $content,'rootCategories' => $this->rootCategories], 'two-columns');
    }
}
