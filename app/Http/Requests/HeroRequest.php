<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroRequest extends FormRequest
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
            'img' => 'required|max:200',
        ];
    }
    public function messages()
    {
        return [
            'img.required' => 'Champ obligatoire!',
            'img.max' => 'Maximum 200 caractères',
        ];
    }
}
