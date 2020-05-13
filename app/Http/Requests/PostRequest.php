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
            'titre' => 'required|max:100',
            'date' => 'required|max:50',
            'texte' => 'required',
            'img' => 'required|max:200',
        ];
    }
    public function messages()
    {
        return [
            'titre.required' => 'Champ obligatoire!',
            'titre.max' => 'Maximum 100 caractères',
            'date.required' => 'Champ obligatoire!',
            'date.max' => 'Maximum 50 caractères',
            'texte.required' => 'Champ obligatoire!',
            'img.required' => 'Champ obligatoire!',
            'img.max' => 'Maximum 200 caractères',
        ];
    }
}
