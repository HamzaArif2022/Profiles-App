<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "email " => "email|unique:profiles",
            "name" => "required|regex:/[a-zA-Z]+/i|unique:profiles|min:10",
            "password" => "required|min:8|max:50|confirmed",
            "bio" => "required|max:100",
            // "name" => "size:20|",   size=20 caractere,
            // "age" => "integer|string",   integer=20 type,
        ];
    }
}