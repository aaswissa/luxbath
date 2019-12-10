<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Cart, DB;

class Order extends Model //elqORM now that is model is Order table name is Order!:)
{
    public static function save_new(){
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->order_data = serialize(Cart::getContent()->toArray());
        $order->total = Cart::getTotal();
        $order->save();
        Session::flash('sm', 'You order has been saved');
        Cart::clear();
               
    }

    public static function getAll(&$data)
    {
        $data['orders'] = DB::table('orders AS o')
        ->join('users AS u', 'u.id', '=', 'o.user_id')
        ->orderBy('o.created_at', 'desc')
        ->get();
    }
}
