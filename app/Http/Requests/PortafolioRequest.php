<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortafolioRequest extends FormRequest
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
            
            'name' => 'max:120|required|unique:portafolios',
            'description' => 'required',
            'url' => 'required',
            'category' => 'required',
            'image' => 'required|image'
        ];
    }
}
