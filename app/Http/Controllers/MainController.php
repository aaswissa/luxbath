<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use App\Menu;


class MainController extends Controller
{
    // aviran's comment to understand what is - public static inside array that is name is 
    // $data = will get these ['arrIndex' => 'arrValue'];
    public static $data  = [];
    public function __construct()
    {
        self::$data['menus'] = Menu::all()->toArray();
        self::$data['category'] = Categorie::all()->toArray();
        
    }
}
