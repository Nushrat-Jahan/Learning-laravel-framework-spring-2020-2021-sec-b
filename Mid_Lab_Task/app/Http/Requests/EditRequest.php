<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'pname' => 'required|min:5|max:30|regex:/^[\pL\s\-]+$/u',
            'category' => 'required',
            'unitPrice' => 'required|numeric|min:1',
            'status' => 'required|in:existing,upcoming',
        ];
    }
}
