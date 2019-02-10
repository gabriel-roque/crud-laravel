<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nome' => 'required|min:5|max:50',
            'estado' => 'required|min:2|max:2',
            'carga' => 'numeric',
            'cargo_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo obrigatorio*',
            'estado.required' => 'O campo obrigatorio*',
            'carga.required' => 'O campo obrigatorio*',
            'cargo_id.required' => 'O campo obrigatorio*',
        ];
    }


}
