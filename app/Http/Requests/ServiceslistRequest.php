<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceslistRequest extends FormRequest
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
            'titre' => 'required|max:30',
            'icon' => 'required|max:30',
            'description' => 'required|max:200',
        ];
    }
    public function messages()
    {
        return [
            'titre.required' => 'Champ obligatoire!',
            'titre.max' => 'Maximum 30 caractères',
            'icon.required' => 'Champ obligatoire!',
            'icon.max' => 'Maximum 30 caractères',
            'description.required' => 'Champ obligatoire!',
            'description.max' => 'Maximum 200 caractères',
        ];
    }
}
