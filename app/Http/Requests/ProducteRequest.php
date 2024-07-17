<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProducteRequest extends FormRequest
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
            'name'           =>      'required',
            'desc'           =>      'required',
            'price'          =>      'required',
            'image'          =>      'required|mimes:jpg,bmp,png',
            'category_id'    =>      'required',
            'meta_id'        =>      'required',
            'content'        =>      'required',
            'quantity'       =>      'required',
            'evaluation'     =>      'required',
            'old_price'      =>      'nullable',
        ];
    }
}
