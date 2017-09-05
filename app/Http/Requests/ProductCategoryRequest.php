<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductCategoryRequest extends FormRequest
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
        $id = ($this->product_category !== null) ? $this->product_category->id : null;

        return [
            'title' => [
                'required',
                'min:2',
                Rule::unique('product_categories')->ignore($id),
            ],
            'content' => 'string',
        ];
    }
}
