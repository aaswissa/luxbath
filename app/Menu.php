<?php

namespace App;
use Session;


use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    static public function save_new($request){
        $menu = new self();
        $menu->link = $request['link'];
        $menu->murl = $request['url'];
        $menu->mtitle = $request['title'];
        $menu->save();

        Session::flash('sm', 'Menu created successfully');
    }


    static public function update_item($request, $id){
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->murl = $request['url'];
        $menu->mtitle = $request['title'];
        $menu->update();

        Session::flash('sm', 'Menu updated successfully');
    }
}
