<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            //
            'name' => 'required|string|max:255||regex:/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|regex:/(01)[0-9]{9}/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Enter Username',
            'email.required' => 'Enter Email',
            'password.required' => 'Enter password',
            'phone.required' => 'Enter phone',
            'name.regex' => 'Invalid Username',
            'phone.regex' => 'Invalid Phone number',

        ];
    }
}
