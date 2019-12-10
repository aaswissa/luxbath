<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class PagesController extends MainController
{
    public static function home(){
        self::$data['page_title'] = 'Home Page';
        return view('site.content.home', self::$data);
    }

    public static function contact(){
        self::$data['page_title'] = 'Contact';
        return view('site.content.contact', self::$data);
    }

    public static function content($url)
    {
        Content::getByUrl($url, self::$data);
        return view('site.content.dynamic_content', self::$data);
    }
}
