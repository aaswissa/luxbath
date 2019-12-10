<?php

namespace App;
use DB;
use Cart;
use Session;
use Image;
use App\Categorie;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getProducts($curl, &$byrefdata)//    &$byrefdata and self::$data is by reference same ram memory cell
    {   
        $categories = Categorie::all()->toArray();
        $products = DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->where('c.curl', '=', $curl)
        ->select('p.*', 'c.ctitle', 'c.curl')
        ->paginate(8);
        

       if($products){
            $byrefdata['products'] = $products;
            $byrefdata['page_title'] = $products[0]->ctitle . ' Products';
            $byrefdata['categories'] = $categories;
       } else {
           abort(404);
       }
    }

    public static function getProductsDesc($curl, &$byrefdata)//    &$byrefdata and self::$data is by reference same ram memory cell
    {   
        $categories = Categorie::all()->toArray();
        $products = DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->where('c.curl', '=', $curl)
        ->orderBy('p.price', 'desc')
        ->select('p.*', 'c.ctitle', 'c.curl')
        ->paginate(6);

        $myurl = DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->where('c.curl', '=', $curl)
        ->orderBy('p.price', 'desc')
        ->select('p.*', 'c.ctitle', 'c.curl')
        ->paginate(8);
        

       if($products){
            $byrefdata['myurl'] = $myurl;
            $byrefdata['products'] = $products;
            $byrefdata['page_title'] = $products[0]->ctitle . ' Products';
       } else {
           abort(404);
       }
    }


    public static function getProductsAsc($curl, &$byrefdata)//    &$byrefdata and self::$data is by reference same ram memory cell
    {   
        $categories = Categorie::all()->toArray();
        $products = DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->where('c.curl', '=', $curl)
        ->orderBy('p.price', 'asc')
        ->select('p.*', 'c.ctitle', 'c.curl')
        ->paginate(8);
        

       if($products){
            $byrefdata['products'] = $products;
            $byrefdata['page_title'] = $products[0]->ctitle . ' Products';
            $byrefdata['categories'] = $categories;
       } else {
           abort(404);
       }
    }










    public static function getAllProducts(&$byrefdata){
        $allproducts = DB::table('products as p')
        ->select('p.*')
        ->get()
        ->toArray();

        if($allproducts){
            $byrefdata['products'] = $allproducts;
        }
    }

    public static function getItem($purl, &$byrefdata){
            $categories = Categorie::all()->toArray();
        if ($item = self::where('purl', '=', $purl)->first()){
            $byrefdata['item'] = $item->toArray();
            $byrefdata['page_title'] = $byrefdata['item']['ptitle'] . 'Product';
            $byrefdata['categories'] = $categories;

        } else {
            abort(404);
        }
    }

    public static function addToCart($pid){
        if (!empty($pid) && is_numeric($pid)){

            if($product = self::find($pid)){
                
               if(!Cart::get($pid)){
                $product = $product->toArray();
                Cart::add($pid, $product['ptitle'], $product['price'], 1, ['image' => $product['pimage']]);
                Session::flash('sm', $product['ptitle'] . ' added to cart!');
               }

            }
        }
    }

    public static function updateCart($op, $pid){
        if(!empty($pid) && is_numeric($pid) && Cart::get($pid)) {
            if (!empty($op)) {
                if ($op === 'plus') {   
                    Cart::update($pid, ['quantity' => 1]);

                } elseif ($op === 'minus') {
                    Cart::update($pid, ['quantity' => -1]);
                }
            }
        }


        
    }

    public static function save_new($request){

        $image_name = 'default_cat.png';
        
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images/', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
           
            $img->resize(null, 300, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }

        $product = new self(); //new self() is only while insert new row to DB cuz it's new for new...
        $product->categorie_id = $request['category_id'];
        $product->ptitle = $request['ptitle'];
        $product->purl = $request['purl'];
        $product->price = $request['price'];
        $product->particle = $request['particle'];
        $product->pimage = $image_name;
        $product->save();
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


        $product = self::find($id);
        $product->categorie_id = $request['category_id'];
        $product->ptitle = $request['ptitle'];
        $product->purl = $request['purl'];
        $product->price = $request['price'];
        $product->particle = $request['particle'];
        $product->save();
        if($image_name)
        {
            $product->pimage = $image_name;
        };
        $product->update();
        Session::flash('sm', 'Product updated successfully');
    }


    }
