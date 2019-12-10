<?php

namespace App\Http\Controllers;


use App\Categorie;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Session;


class ProductsController extends MainController
{

    public function index()
    {
        self::$data['products'] = Product::all()->toArray();
        return view('cms.index.products', self::$data);
    }


    public function create()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.index.add_product', self::$data);
    }


    public function store(ProductRequest $request) // Request changed to MenuRequest cuz our validation $request contain on data from form filled by user
    {
        Product::save_new($request);
        return redirect('cms/products');
    }


    public function show($id)
    {
        self::$data['product_id'] = $id;
        return view('cms.index.delete_product', self::$data);
    }


    public function edit($id)
    {
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['product_item'] = Product::find($id)->toArray();
        return view('cms.index.edit_product', self::$data);
    }


    public function update(ProductRequest $request, $id)
    {
        Product::update_item($request, $id);
        return redirect('cms/products');
    }


    public function destroy($id)
    {
        Product::destroy($id);
        Session::flash('sm', 'Product has been deleted successfully');
        return redirect('cms/products');

    }
}
