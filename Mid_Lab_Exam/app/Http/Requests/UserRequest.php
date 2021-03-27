<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email',
            'city' => 'required|min:1|max:20',
            'country' => 'required|min:1|max:20',
            'address' => 'required',
            'companyname' => 'required|min:1|max:20',

        ];
    }
}
