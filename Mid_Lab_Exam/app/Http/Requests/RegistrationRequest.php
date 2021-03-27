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
            'name' => 'required|alpha|min:3|max:30',
            'username' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required|min:1|max:20',
            'city' => 'required|min:1|max:20',
            'country' => 'required|min:1|max:20',
            'address' => 'required',
            'companyname' => 'required|min:1|max:20',
            'confirmpassword' => 'required|same:password',
        ];
    }
}
