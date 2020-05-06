<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'description' => 'required|max:50',
        ];
    }
    public function messages()
    {
        return [
            'description.required' => 'Champ obligatoire!',
            'description.max' => 'Maximum 50 caractères',
        ];
    }
}
