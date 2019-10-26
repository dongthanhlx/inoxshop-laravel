<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $rootCategories = null;
    public function loadAllCategoryData()
    {
        $categoryObject = new Category();
        $this->rootCategories = $categoryObject->getAllParent();
        foreach ($this->rootCategories as $rootCategory)
        {
            $rootCategory->categories = $categoryObject->getChilds($rootCategory->id);
            $productObject = new Product();
            foreach ($rootCategory->categories as $category)
            {
                $category->products = $productObject->getProductsByCategoryID($category->id);
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
