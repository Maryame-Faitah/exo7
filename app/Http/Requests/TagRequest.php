<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'tag1' => 'required|max:50',
            'tag2' => 'required|max:50',
            'tag3' => 'required|max:50',
            'tag4' => 'required|max:50',
            'tag5' => 'required|max:50',
            'tag6' => 'required|max:50',
            'tag7' => 'required|max:50',
            'tag8' => 'required|max:50',
        ];
    }
    public function messages()
    {
        return [
            'tag1.required' => 'Champ obligatoire!',
            'tag1.max' => 'Maximum 50 caractères',
            'tag2.required' => 'Champ obligatoire!',
            'tag2.max' => 'Maximum 50 caractères',
            'tag3.required' => 'Champ obligatoire!',
            'tag3.max' => 'Maximum 50 caractères',
            'tag4.required' => 'Champ obligatoire!',
            'tag4.max' => 'Maximum 50 caractères',
            'tag5.required' => 'Champ obligatoire!',
            'tag5.max' => 'Maximum 50 caractères',
            'tag6.required' => 'Champ obligatoire!',
            'tag6.max' => 'Maximum 50 caractères',
            'tag7.required' => 'Champ obligatoire!',
            'tag7.max' => 'Maximum 50 caractères',
            'tag8.required' => 'Champ obligatoire!',
            'tag8.max' => 'Maximum 50 caractères',
        ];
    }
}
