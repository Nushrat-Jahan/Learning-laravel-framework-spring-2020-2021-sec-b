<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSellRequest extends FormRequest
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

            'customerName' => 'required|alpha|min:3|max:30',
            'address' => 'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/',
            'phone' => 'required|numeric|min:11|max:15',
            'productName' => 'required',
            'productId' => 'required',
            'unitPrice' => 'required|numeric|min:1',
            'quantity' => 'required|numeric|max:20|min:1',
            'total' => 'required|numeric|min:1',
            'payType' => 'required'
        ];
    }

    public function messages(){
        return [
            'quantity.min' => "Quantity can't be zero or less than zero..."
        ];
    }
}
