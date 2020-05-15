<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorieRequest extends FormRequest
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
            'categorie' => 'required|max:50',
        ];
    }
    public function messages()
    {
        return [
            'categorie.required' => 'Champ obligatoire!',
            'categorie.max' => 'Maximum 50 caractères',
        ];
    }
}
