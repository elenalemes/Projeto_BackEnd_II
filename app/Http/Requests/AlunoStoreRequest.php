<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoStoreRequest extends FormRequest
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
         * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
         */
        public function rules(): array
        {
            return [
                'nome' => 'required|string|max:255',
                'telefone' => 'required|numeric',
                'data_nascimento' => 'required|date_format:Y-m-d',
                'cpf' => 'required|numeric',
                'rg' => 'required|numeric',
                'naturalidade' => 'required|string',
                'nacionalidade' => 'required|string',
                'serie' => 'required|string',
                'turno' => 'required|string',
                'matricula' => 'required|numeric'
            ];
        }

        public function messages(): array
        {
            return [
                'nome.required' => 'O campo nome é obrigatório.',
                'nome.string' => 'O campo nome deve ser uma string.',
                'nome.max' => 'O campo nome deve ter no máximo 255 caracteres.',
                'rg.required' => 'O campo RG é obrigatório.',
                'cpf.required' => 'O campo CPF é obrigatório.',
                'rg.numeric' => 'O campo RG deve ser numérico.',
                'cpf.numeric' => 'O campo CPF deve ser numérico.',
                'matricula.required' => 'A matricula é obrigatória.',
                'matricula.numeric' => 'A matrícula deve ser um número.',
            ];
        }

        public function prepareForValidation()
        {
           //
        }
    }
