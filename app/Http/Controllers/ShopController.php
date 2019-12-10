<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use DB; //use cause need DB on global scope
use App\Product;
use Cart;
use Session;
use App\Order;

class ShopController extends MainController
{
    public function categories(){
     self::$data['categories'] = Categorie::all()->toArray();
     self::$data['page_title'] = 'Categories 770';
     return view('site.content.categories', self::$data);
    }

    public function catergoiresForHome(){
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['products'] = Product::all();
        return view('site.content.home', self::$data);
       }

    public function products($curl)
    {
        Product::getProducts($curl, self::$data);
        return view('site.content.products', self::$data);
    }

    public function productsDesc($curl)
    {
        Product::getProductsDesc($curl, self::$data);
        self::$data['categories'] = Categorie::all()->toArray();
        return view('site.content.products_desc', self::$data);
    }


    public function productsAsc($curl)
    {
        Product::getProductsAsc($curl, self::$data);
        self::$data['categories'] = Categorie::all()->toArray();
        return view('site.content.products_asc', self::$data);
    }

 

    public function item($curl, $purl)
    {
        Product::getItem($purl, self::$data);
        return view('site.content.item', self::$data);
    }

    public function ajaxAddToCart(Request $request){
       Product::addToCart( $request['pid']);
    }

    public function cart(){
        self::$data['page_title'] = 'Cart Page';
        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        return view('site.content.cart', self::$data);
    }


    public function cartForHome(){
        self::$data['page_title'] = 'Cart Page';
        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        return view('site.master', self::$data);
    }

    public function clearCart(){
        Cart::clear();
        return redirect('shop/cart');
    }

    public function removeItem($pid){
        Cart::remove($pid);
        return redirect('shop/cart');
    }

    public function updateItem($op, $pid){
        Product::updateCart($op, $pid);
        return redirect('shop/cart');
        
    }

    public function orderNow(){

        if(Cart::isEmpty()){
            return redirect('shop/cart');
        }

        if(!Session::has('user_id')) {
            return redirect('user/signin?redirect=shop/cart');
        }

        Order::save_new();
        return redirect('');
    }
}