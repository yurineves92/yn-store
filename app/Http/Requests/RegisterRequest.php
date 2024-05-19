<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|min:4|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:255|confirmed'
        ];
    }
}
