<?php

namespace App\Http\Controllers;


use App\Categorie;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Order;
use Illuminate\Support\Facades\Session;


class OrdersController extends MainController
{

    public function orders()
    {
        Order::getAll(self::$data);
        return view('cms.index.orders', self::$data);

        
    }
}
