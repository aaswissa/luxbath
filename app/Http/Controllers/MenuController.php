<?php

namespace App\Http\Controllers;


use App\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use Illuminate\Support\Facades\Session;


class MenuController extends MainController
{

    public function index()
    {
        return view('cms.index.menu', self::$data);
    }


    public function create()
    {
        return view('cms.index.add_menu', self::$data);
    }


    public function store(MenuRequest $request) // Request changed to MenuRequest cuz our validation $request contain on data from form filled by user
    {
        Menu::save_new($request);
        return redirect('cms/menu');
    }


    public function show($id)
    {
        self::$data['menu_id'] = $id;
        return view('cms.index.delete_menu', self::$data);
    }


    public function edit($id)
    {
        $test = self::$data['menu_item'] = Menu::find($id)->toArray();
        return view('cms.index.edit_menu', self::$data);
    }


    public function update(MenuRequest $request, $id)
    {
        Menu::update_item($request, $id);
        return redirect('cms/menu');
    }


    public function destroy($id)
    {
        Menu::destroy($id);
        Session::flash('sm', 'Menu link deleted successfully');
        return redirect('cms/menu');

    }
}
