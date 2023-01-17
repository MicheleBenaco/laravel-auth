<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'nome_progetto' => ['required', Rule::unique('projects')->ignore($this->project)],
            'descrizione' =>['required', 'min:10', 'max:2000'],
            'collaboratori' => ['nullable'],
            'autore'=>['required','min:5','max:40'],
            'data_inizio_progetto' => ['required'],
            'category_id' => 'nullable|exists:categories,id'
        ];

    }
        public function messages(){
                return [
            'nome_progetto.required' => 'Il titolo è obbligatorio.',
            'nome_progetto.min' => 'Il titolo deve essere lungo almeno :min caratteri.',
            'nome_progetto.max' => 'Il titolo non può superare i :max caratteri.',
            'nome_progettole.unique:projects' => 'Il titolo esiste già',
            'descrizione.min'=> 'La descrizione deve essere lunga almeno :min caratteri.',
            'descrizione.require' =>'La descrizione è obbligatoria.',
            'descrizione.max'=>'La descrizione non può superare i :max caratteri.' ,
            'autore.require'=>'L\'autore è obbligatorio',
            'data_inizio_progetto'=>'Data obbligatoria'
        ];
    }
}
