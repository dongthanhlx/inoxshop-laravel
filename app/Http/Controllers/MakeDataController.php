<?php

namespace App\Http\Controllers;

use App\MakeDataDB;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MakeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->render('MakeDataDB', ['rootCategories' => $this->rootCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $slug
     * @return void
     */
    public function edit($slug)
    {
        $pageObject = new Page();
        $page = $pageObject->getPageBySlug($slug);

        $this->loadAllCategoryData();
        return $this->render('EditDataDB', ['page' => $page , 'rootCategories' => $this->rootCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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

        redirect()->route('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
