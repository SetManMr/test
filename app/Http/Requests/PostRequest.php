<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'site_name' => 'required|min:3|max:20',
            'phone' => 'required|numeric|min:6',
            'email' => 'required|email|max:70',
            'descr' => 'required|min:10|max:550',
        ];
    }
}
