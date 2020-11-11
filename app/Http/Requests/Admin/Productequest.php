<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Productequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:255',
            'user_id'=>'required|exist:users,id',
            'categories_id'=>'required|exist:categories,id',
            'price'=>'required|integer',
            'description'=>'required'
        ];
    }
}
