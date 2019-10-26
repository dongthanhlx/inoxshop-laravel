<?php

namespace App\Http\Controllers;

use App\Page;

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
        $content = $page->getContentBySlug('home');
        $this->loadAllCategoryData();
        return $this->render('home', ['content' => $content, 'rootCategories' => $this->rootCategories], 'two-columns');
    }
}
