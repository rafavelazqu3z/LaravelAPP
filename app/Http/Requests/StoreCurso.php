<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name'=> 'name of the course'
        ];
    }

    public function messages()
    {
        return [
          'descripcion.required' => 'Must enter a description of the course'
        ];
    }
}
