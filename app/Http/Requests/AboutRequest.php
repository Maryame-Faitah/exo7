<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'titre' => 'required|max:50',
            'texte_gauche' => 'required|max:200',
            'texte_droite' => 'required|max:200',
            'nom_btn' => 'required|max:20',
        ];
    }
    public function messages()
    {
        return [
            'titre.required' => 'Champ obligatoire!',
            'titre.max' => 'Maximum 50 caractères',
            'texte_gauche.required' => 'Champ obligatoire!',
            'texte_gauche.max' => 'Maximum 200 caractères',
            'texte_droite.required' => 'Champ obligatoire!',
            'texte_droite.max' => 'Maximum 200 caractères',
            'nom_btn.required' => 'Champ obligatoire!',
            'nom_btn.max' => 'Maximum 20 caractères',
        ];
    }
}
