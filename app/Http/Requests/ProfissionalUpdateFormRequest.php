<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProfissionalUpdateFormRequest extends FormRequest
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
            'nome' => '|max:120|min:5',
            'celular' => '|max:11|min:10|',
            'email'  => '|max:120|',
            'cpf' => '|max:11|min:11|',
            'dataNascimento' => '',
            'cidade' => '|max:120|',
            'estado' => '|max:2|min:2',
            'pais' => '|max:80',
            'rua' => '|max:120',
            'numero' => '|max:10',
            'bairro' => '|max:100',
            'cep' => '|max:8|min:8',
            'complemento' => 'max:150',
            'salario' => '|decimal:2,4'
    
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
            
            'nome.max' => 'Este campo deve conter no maximo 120 caracteres',
            'nome.min' => 'Este campo deve conter no minimo 5 caracteres',


          
            'celular.max' => 'Este campo deve conter no maximo 11 caracteres',
            'celular.min' => 'Este campo deve conter no minimo 10 caracteres',

           
            'email.email' => 'formato inválido',
            

            
            'cpf.max' => 'o campo deve conter 11 caracteris',
            'cpf.min' => 'o campo deve no minimo 11 caracteris',
            

            'dataNascimento.'=>'Preencha esse campo com sua data de nascimento',
            'dataNascimento.date'=>'coloque sua data corretamente',

            'cidade.' => 'Preencha o campo cidade',
            'cidade.max' => 'Este campo deve conter no maximo 120 caracteres',
       

            
            'estado.max' => 'Este campo deve conter no maximo 2 caracteres',
            'estado.min' => 'Este campo deve conter no minimo 2 caracteres',
            

            
            'pais.max' => 'Este campo deve conter no maximo 80 caracteres',
           

            
            'rua.max' => 'Este campo deve conter no maximo 120 caracteres',
           

            
            'numero.max' => 'Este campo deve conter no maximo 10 caracteres',

            'bairro.max' => 'Este campo deve conter no maximo 100 caracteres',
            

            'cep.max' => 'Este campo deve conter no maximo 8 caracteres',
            'cep.min' => 'o campo deve no minimo 8 caracteris',
            'cep.numeric' => 'Este campo só aceita numeros',

            'complemento.max' => 'Este campo deve conter no maximo 150 caracteres',

           

            'salario.max' => 'Este campo deve conter no maximo 8 caracteres',
            'salario.min' => 'o campo deve no minimo 8 caracteris',
            'salario.decimal' => 'Este campo só aceita numeros'
        ];


}
}
