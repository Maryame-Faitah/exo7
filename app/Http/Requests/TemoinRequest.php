<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemoinRequest extends FormRequest
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
            'nom' => 'required|max:30',
            'prenom' => 'required|max:30',
            'fonction' => 'required|max:50',
            'img' => 'required|max:200',
            'temoignage' => 'required|max:200',
        ];
    }
    public function messages()
    {
        return [
            'nom.required' => 'Champ obligatoire!',
            'nom.max' => 'Maximum 30 caractères',
            'prenom.required' => 'Champ obligatoire!',
            'prenom.max' => 'Maximum 30 caractères',
            'fonction.required' => 'Champ obligatoire!',
            'fonction.max' => 'Maximum 50 caractères',
            'img.required' => 'Champ obligatoire!',
            'img.max' => 'Maximum 200 caractères',
            'temoignage.required' => 'Champ obligatoire!',
            'temoignage.max' => 'Maximum 200 caractères',
        ];
    }
}
