<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    public function getCategories($conditions = [])
    {
        $category = Category::all();

        return $category->where($conditions[0], $conditions[1]);
    }

    public function getCategoryByID($category_id)
    {
        return $this->getCategories(['id', $category_id]);
    }

    public function getAllParent()
    {
        return $this->getCategories(['parent_id', 0]);
    }

    public function getParent($category_id)
    {
        $category = $this->getCategoryByID($category_id);

        return $this->getCategoryByID($category->parent_id);
    }

    public function getChilds($category_id)
    {
        return $this->getCategories(['parent_id', $category_id]);
    }
}

