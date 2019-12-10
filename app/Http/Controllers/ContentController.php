<?php

namespace App\Http\Controllers;


use App\Menu;
use App\Content;
// use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use Illuminate\Support\Facades\Session;


class ContentController extends MainController
{

    public function index()
    {
        self::$data['contents'] = Content::all()->toArray();
        return view('cms.index.content', self::$data);
    }


    public function create()
    {
        return view('cms.index.add_content', self::$data);
    }


    public function store(ContentRequest $request) //Before trying to save ContentRequest check if form valid
    {
        Content::save_new($request);  
        return redirect('cms/content');
    }


    public function show($id)
    {
        self::$data['menu_id'] = $id;
        return view('cms.index.delete_content', self::$data);
    }


    public function edit($id)
    {
        self::$data['content_item'] = Content::find($id)->toArray();
        return view('cms.index.edit_content', self::$data);
    }


    public function update(ContentRequest $request, $id)
    {
        Content::update_item($request, $id);
        return redirect('cms/content');
    }


    public function destroy($id)
    {
        Content::destroy($id);
        Session::flash('sm', 'Content deleted successfully');
        return redirect('cms/content');

    }
}
