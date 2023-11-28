<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProfissionalFormRequest extends FormRequest
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
            'nome' => 'required|max:120|min:5',
            'celular' => 'required|max:11|min:10|',
            'email'  => 'required|max:120|unique:profissionals,email'.$this->id,
            'cpf' => 'required|max:11|min:11|unique:profissionals,cpf'.$this->id,
            'dataNascimento' => 'required',
            'cidade' => 'required|max:120|',
            'estado' => 'required|max:2|min:2',
            'pais' => 'required|max:80',
            'rua' => 'required|max:120',
            'numero' => 'required|max:10',
            'bairro' => 'required|max:100',
            'cep' => 'required|max:8|min:8',
            'complemento' => 'max:150',
            'password' => 'required',
            'salario' => 'required|decimal:2,4'
    
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
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.max' => 'O campo nome deve ter no máximo 120 caracteres.',
            'nome.min' => 'O campo nome deve ter no mínimo 5 caracteres.',
            'celular.required' => 'O campo celular é obrigatório.',
            'celular.max' => 'O campo celular deve ter no máximo 11 caracteres.',
            'celular.min' => 'O campo celular deve ter no mínimo 10 caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.max' => 'O campo email deve ter no máximo 120 caracteres.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.max' => 'O campo CPF deve ter no máximo 11 caracteres.',
            'cpf.min' => 'O campo CPF deve ter no mínimo 11 caracteres.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'dataNascimento.required' => 'O campo data de nascimento é obrigatório.',
            'dataNascimento.date' => 'O campo data de nascimento deve ser uma data válida.',
            'cidade.required' => 'O campo cidade é obrigatório.',
            'cidade.max' => 'O campo cidade deve ter no máximo 120 caracteres.',
            'estado.required' => 'O campo estado é obrigatório.',
            'estado.max' => 'O campo estado deve ter no máximo 2 caracteres.',
            'estado.min' => 'O campo estado deve ter no mínimo 2 caracteres.',
            'pais.required' => 'O campo país é obrigatório.',
            'pais.max' => 'O campo país deve ter no máximo 80 caracteres.',
            'rua.required' => 'O campo rua é obrigatório.',
            'rua.max' => 'O campo rua deve ter no máximo 120 caracteres.',
            'numero.required' => 'O campo número é obrigatório.',
            'numero.max' => 'O campo número deve ter no máximo 10 caracteres.',
            'bairro.required' => 'O campo bairro é obrigatório.',
            'bairro.max' => 'O campo bairro deve ter no máximo 100 caracteres.',
            'cep.required' => 'O campo CEP é obrigatório.',
            'cep.max' => 'O campo CEP deve ter no máximo 8 caracteres.',
            'cep.min' => 'O campo CEP deve ter mínimo 8 caracteres.',
            'complemento.max' => 'O campo complemento deve ter no máximo :max caracteres.',
            'password.required' => 'O campo senha é obrigatório.',

            'salario.required' => 'Preencha o campo salario',
            'salario.max' => 'Este campo deve conter no maximo 8 caractéris',
            'salario.min' => 'o campo deve no minimo 8 caracteris',
            'salario.decimal' => 'Este campo só aceita numeros decimais'
        ];


}
}
