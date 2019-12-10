<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends MainController

{
    public function dashboard(){
        return view('cms.index.dashboard', self::$data);
    }
}
