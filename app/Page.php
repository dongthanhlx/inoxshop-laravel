<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function getContent($slug)
    {
        $pages = Page::all();

        return $pages->where('with_slug', $slug)->first()->content;
    }

    public function getPages($conditions = [])
    {
        $pages = Page::all();
        return $pages->where($conditions[0], $conditions[1]);
    }
}
