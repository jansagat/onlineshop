<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'price' => 'required|numeric',
            'old_price' => 'required|numeric',
            'currency' => 'required',
            'available' => 'required|boolean',
            'original_url' => 'url',
            'ali_id' => 'numeric',
            'description' => 'required|min:1',
        ];
    }
}
