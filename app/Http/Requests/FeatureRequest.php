<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
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
            'nom_btn' => 'required|max:20',
        ];
    }
    public function messages()
    {
        return [
            'titre.required' => 'Champ obligatoire!',
            'titre.max' => 'Maximum 50 caractères',
            'nom_btn.required' => 'Champ obligatoire!',
            'nom_btn.max' => 'Maximum 20 caractères',
        ];
    }
}
