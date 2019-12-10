<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules(Request $request)
    {
        $ignore = !empty($request['item_id']) ? ',' .$request['item_id'] : '';
        return [
            'category_id' => 'required',
            'ptitle' => 'required|min:2|max:50',
            'purl' => 'required|min:2|max:100|regex:/^[a-z\d-]+$/|unique:products,purl' . $ignore,
            'price' => 'required|numeric',
            'particle' => 'required|min:2|max:1000',
            'image' => 'image|max:5242880',
        ];
    }
}
