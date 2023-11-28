<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClienteUpdateFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'max:120|min:5',
            'celular' => 'max:11|min:10|',
            'email'  => 'max:120|email',
            'cpf' => 'max:11|min:11',
            'dataNascimento' => 'date',
            'cidade' => 'max:120',
            'estado' => 'max:2|min:2',
            'pais' => 'max:80',
            'rua' => 'max:120',
            'numero' => 'max:10',
            'bairro' => 'max:100',
            'cep' => 'max:8|min:8',
            'complemento' => 'max:150',
            
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }


    public function messages()
    {
        return  [
            
            
            'nome.max' => 'O campo nome deve ter no máximo 120 caracteres.',
            'nome.min' => 'O campo nome deve ter no mínimo 5 caracteres.',
           
            'celular.max' => 'O campo celular deve ter no máximo 11 caracteres.',
            'celular.min' => 'O campo celular deve ter no mínimo 10 caracteres.',
           
            'email.max' => 'O campo email deve ter no máximo 120 caracteres.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            
            
            'cpf.max' => 'O campo CPF deve ter no máximo 11 caracteres.',
            'cpf.min' => 'O campo CPF deve ter no mínimo 11 caracteres.',
            
           
            'dataNascimento.date' => 'O campo data de nascimento deve ser uma data válida.',
            
            'cidade.max' => 'O campo cidade deve ter no máximo 120 caracteres.',
            
            'estado.max' => 'O campo estado deve ter no máximo 2 caracteres.',
            'estado.min' => 'O campo estado deve ter no mínimo 2 caracteres.',
            
            'pais.max' => 'O campo país deve ter no máximo 80 caracteres.',
            
            'rua.max' => 'O campo rua deve ter no máximo 120 caracteres.',
            
            'numero.max' => 'O campo número deve ter no máximo 10 caracteres.',
            
            'bairro.max' => 'O campo bairro deve ter no máximo 100 caracteres.',
            
            'cep.max' => 'O campo CEP deve ter no máximo 8 caracteres.',
            'cep.min' => 'O campo CEP deve ter mínimo 8 caracteres.',
            'complemento.max' => 'O campo complemento deve ter no máximo :max caracteres.',
            
            
        ];


}
}
