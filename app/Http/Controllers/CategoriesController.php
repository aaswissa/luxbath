<?php

namespace App\Http\Controllers;


use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Session;


class CategoriesController extends MainController
{

    public function index()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.index.categories', self::$data);
    }


    public function create()
    {
        return view('cms.index.add_category', self::$data);
    }


    public function store(CategoryRequest $request) // Request changed to MenuRequest cuz our validation $request contain on data from form filled by user
    {
        Categorie::save_new($request);
        return redirect('cms/categories');
    }


    public function show($id)
    {
        self::$data['category_id'] = $id;
        return view('cms.index.delete_category', self::$data);
    }


    public function edit($id)
    {
        self::$data['category_item'] = Categorie::find($id)->toArray();
        return view('cms.index.edit_category', self::$data);
    }


    public function update(CategoryRequest $request, $id)
    {
        Categorie::update_item($request, $id);
        return redirect('cms/categories');
    }


    public function destroy($id)
    {
        Categorie::destroy($id);
        Session::flash('sm', 'Category deleted successfully');
        return redirect('cms/categories');

    }
}
