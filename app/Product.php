<?php

namespace App;

class Product extends BaseModel
{

    public function getProductsByCategoryID($category_id)
    {
        return $this->get(['category_id', '=', $category_id]);
    }

}
