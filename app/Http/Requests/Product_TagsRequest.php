<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product_TagsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //required validation
            'product_id'        =>      'required',
            'tags_id'           =>      'required',
        ];
    }
}
