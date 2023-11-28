<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AgendaUpdateFormRequest extends FormRequest
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
                'profissional_id' => '|integer',
           
            'data_hora' => '|date'
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
            
            


           
            'data_hora.date' => 'formato inválido',
            

            
            'pagamento.max' => 'o campo deve conter 20 caracteris',
            'pagamento.min' => 'o campo deve no minimo 3 caracteris',


            
            
        ];
}
}
