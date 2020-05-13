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
            'categorie1' => 'required|max:50',
            'categorie2' => 'required|max:50',
            'categorie3' => 'required|max:50',
            'categorie4' => 'required|max:50',
            'categorie5' => 'required|max:50',
            'categorie6' => 'required|max:50',
        ];
    }
    public function messages()
    {
        return [
            'categorie1.required' => 'Champ obligatoire!',
            'categorie1.max' => 'Maximum 50 caractères',
            'categorie2.required' => 'Champ obligatoire!',
            'categorie2.max' => 'Maximum 50 caractères',
            'categorie3.required' => 'Champ obligatoire!',
            'categorie3.max' => 'Maximum 50 caractères',
            'categorie4.required' => 'Champ obligatoire!',
            'categorie4.max' => 'Maximum 50 caractères',
            'categorie5.required' => 'Champ obligatoire!',
            'categorie5.max' => 'Maximum 50 caractères',
            'categorie6.required' => 'Champ obligatoire!',
            'categorie6.max' => 'Maximum 50 caractères',
        ];
    }
}
