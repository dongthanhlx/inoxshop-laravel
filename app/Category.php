<?php

namespace App;

class Category extends BaseModel
{
    public function getCategoryByID($id)
    {
        return $this->get(['id', '=', $id])->first();
    }

    public function getAllParent()
    {
        return $this->get(['parent_id', '=', 0]);
    }

    public function getParent($category_id)
    {
        $category = $this->getCategoryByID($category_id);

        return $this->getCategoryByID($category->parent_id);
    }

    public function getChilds($parent_id)
    {
        return $this->get(['parent_id', '=', $parent_id]);
    }
}

