<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
     public function rules()
    {
        return [
            'name'=>['required','min:3','max:50']
        ];
    }
        public function messages(){
                return [
            'name.required' => 'Il nome della categoria è obbligatorio.',
            'name.min' => 'Il nome della categoria deve essere lungo almeno :min caratteri.',
            'name.max' => 'Il nome della categoria non può superare i :max caratteri.',

        ];
    }
}
