<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Main_InfoRequest extends FormRequest
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
            'location'          =>      'required',
            'email'             =>      'required',
            'phone'             =>      'required',
            'address'           =>      'required',
            'facebook'          =>      'required',
            'twitter'           =>      'required',
            'linkedin'          =>      'required',
            'telegram'          =>      'required',
            'about_as'          =>      'required',
            'about_as'          =>      'required',
        ];
    }
}
