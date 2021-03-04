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
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required|alpha|min:3|max:30',
            'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix
            |required|unique:users_table|max:50|min:10',
            'password' => 'required|alpha_num|min:8|max:20',
            'city' => 'required|min:3|max:20',
            'country' => 'required|min:3|max:20',
            'companyname' => 'required|min:3|max:20',
            'pnumber' => 'required|numeric|min:11|max:15',
            'confirmpassword' => 'required|same:password',
        ];
    }

    public function messages(){
        return [
            'email.required' => "Email can't left empty...",
            'email.max' => "Email can be maximum 50 character..",
            'password.min' => "Must be at least 8 char..",
            'password.max' => "Password can be maximum 20 character..",
            'password.required' => "Password can't left empty..."
        ];
    }
}
