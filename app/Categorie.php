<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
use Image;

class Categorie extends Model
{
    public static function save_new($request)
    {
        
        
        $image_name = 'default_cat.png';
        
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images/', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
           
            $img->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }


        $category = new self(); //new self() is only while insert new row to DB cuz it's new for new...
        $category->id = $request['id'];
        $category->curl = $request['url'];
        $category->ctitle = $request['ctitle'];
        $category->carticle = $request['description'];
        $category->cimage = $image_name;
        $category->save();
        Session::flash('sm', 'Category added successfully');

    }

    public static function update_item($request, $id){
        $image_name = '';
        
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images/', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
           
            $img->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }


        $category = self::find($id);
        $category->ctitle = $request['ctitle'];
        $category->curl = $request['url'];
        $category->carticle = $request['description'];
        if($image_name)
        {
            $category->cimage = $image_name;
        };
        $category->update();
        Session::flash('sm', 'Category updated successfully');
    }
}
