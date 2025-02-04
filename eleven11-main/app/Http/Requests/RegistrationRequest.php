<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'username' => 'required|unique:users|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|digits:10',
            'password' => 'required|confirmed|min:8',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'The username field is required.',
            'username.max' => 'The username field must not exceed 255 characters.',
            'username.unique' => 'The username is already taken.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already in use.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.confirmed' => 'The password confirmation does not match.',
            'phone.required' => 'The phone number field is required.',
            'phone.digits' => 'The phone number must be a 10 digit number.',
        ];
    }
}
