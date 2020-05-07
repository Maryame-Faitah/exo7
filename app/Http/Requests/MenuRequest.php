<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'section1' => 'required|max:20',
            'section2' => 'required|max:20',
            'section3' => 'required|max:20',
            'section4' => 'required|max:20',
            'img' => 'required|max:200',
        ];
    }
    public function messages()
    {
        return [
            'section1.required' => 'Champ obligatoire!',
            'section1.max' => 'Maximum 20 caractères',
            'section2.required' => 'Champ obligatoire!',
            'section2.max' => 'Maximum 20 caractères',
            'section3.required' => 'Champ obligatoire!',
            'section3.max' => 'Maximum 20 caractères',
            'section4.required' => 'Champ obligatoire!',
            'section4.max' => 'Maximum 20 caractères',
            'img.required' => 'Champ obligatoire!',
            'img.max' => 'Maximum 200 caractères',
        ];
    }
}
