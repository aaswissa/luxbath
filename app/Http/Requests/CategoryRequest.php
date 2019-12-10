<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules(Request $request)
    {
        $ignore = !empty($request['item_id']) ? ',' .$request['item_id'] : '';
        return [
            'ctitle' => 'required|min:2|max:50',
            'url' => 'required|min:2|max:100|regex:/^[a-z\d-]+$/|unique:categories,curl' . $ignore,
            'description' => 'required|min:2|max:1000',
            'image' => 'image|max:5242880',
        ];
    }
}
