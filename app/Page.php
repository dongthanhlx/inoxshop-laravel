<?php

namespace App;


class Page extends BaseModel
{

    public function getContentBySlug($slug)
    {
        return $this->get(['with_slug', '=', $slug])->first()->content;
    }

    public function getPageBySlug($slug)
    {
        return $this->get(['with_slug', '=', $slug])->first();
    }

}
