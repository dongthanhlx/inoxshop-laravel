<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    protected $rootCategories = null;

    public function loadAllDataCategory()
    {
        $categoryObject = new Category();
        $this->rootCategories = $categoryObject->getAllParent();

        foreach ($this->rootCategories as $rootCategory)
        {
            $rootCategory->categories = $categoryObject->getChilds($rootCategory->id);
            foreach ($rootCategory->categories as $category)
            {
                $productObject = new Product();
                $category->products = $productObject->getProducts(['category_id', $category->id]);
            }
        }
    }

    public function render(string $viewpath = 'home', $data = [], string $layout = 'two-columns')
    {
        return view($viewpath)->with(array_merge(
            ['layout' => $layout],
                $data
        ));

    }

}
