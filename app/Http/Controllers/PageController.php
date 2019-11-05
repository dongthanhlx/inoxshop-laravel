<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->loadAllCategoryData();
        return $this->render('home', ['rootCategories' => $this->rootCategories], 'two-columns');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $this->render('make-data', ['rootCategories' => $this->rootCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $content = $request->input('content');
        $slug = Str::slug($name, '-');

        $page = new Page;
        $page->name = $name;
        $page->with_slug = $slug;
        $page->content = $content;

        $page->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        $pageObject = new Page();
        $content = $pageObject->getContentBySlug($slug);
        $this->loadAllCategoryData();
        return $this->render('page', ['content' => $content, 'rootCategories' => $this->rootCategories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug)
    {
        $pageObject = new Page();
        $page = $pageObject->getPageBySlug($slug);

        $this->loadAllCategoryData();
        return $this->render('edit-data', ['page' => $page , 'rootCategories' => $this->rootCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $newName = $request->input('newName');
        $newSlug = Str::slug($newName);
        $newContent = $request->input('newContent');

        $newData = [
            'name' => $newName,
            'with_slug' => $newSlug,
            'content' => $newContent
        ];

        $page = new Page;
        $page->updateByID($id, $newData);

        redirect('home');
    }

}
