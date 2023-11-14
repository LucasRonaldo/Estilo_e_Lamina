<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ServicoUpdateFormRequest extends FormRequest
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

            'nome' => '|max:80|min:5|',
            'descricao' => '|max:200|min:10|',
            'duracao'  => '|numeric',
            'preco' => '|decimal:2,4'



        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }


    public function messages()
    {
        return [
           
            'nome.max' => 'o campo nome deve conter no maximo 80 caracteres',
            'nome.min' => 'o campo nome deve conter no minimo 5 caracteres',
            
           
            'descricao.max' => 'descrição deve conter no máximo 200 caracteres',
            'descricao.min' => 'descrição deve conter no minimo 10 caracteres',
           
            'duracao.numeric' => 'duração só aceita numeros',
           
            'preco.preco' => 'Formato de preço inválido',
            'preco.decimal' => 'Este campo recebe apenas numeros decimais'

        ];
    }
}