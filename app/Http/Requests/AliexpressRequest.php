<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AliexpressRequest extends FormRequest
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
        $id = ($this->aliexpress !== null) ? $this->aliexpress->id : null;

        return [
            'keyword' => [
                'required',
                Rule::unique('keywords')->ignore($id),
            ],
            'categories.*' => 'integer',
        ];
    }
}
