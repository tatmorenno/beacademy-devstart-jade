<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
        $id = $this->id ?? '';
        return [
            'name' => [
                'required',
                'string',
                'max:50',
                'min:3'
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email,{$id},id',
            ],
            'cpf' => [
                'required',
                'unique:users,cpf,{$id},id',
                'digits:11',
            ],
            'password' => [
                'required',
                'min:4',
                'max:12'
            ],
            'phone' => [
                'required'
            ],
            'birth_date' => [
                'required',
                'before:today'
            ],
            'zipcode' => [
                'required',
                'string',
                'min:8',
                'max:9'
            ],
            'address' => [
                'required',
                'string',
                'max:255'
            ],
            'number_house' => [
                'required',
                'string',
                'max:10'
            ],
            'complement_house' => [
                'nullable',
                'string',
                'max:50'
            ],
            'district' => [
                'required',
                'string',
                'max:50'
            ],
            'city' => [
                'required',
                'string',
                'max:50'
            ],
            'state' => [
                'required',
                'string',
                'max:2'
            ],

        ];
    }
    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório',
            'min' => 'Este campo deve ter no mínimo :min caracteres',
            'unique' => 'O :attribute já possui uma conta vinculada',
            'max' => 'O :attribute não pode ser maior que :max caracteres',
            'email' => 'O email precisa ser um email válido',
            'digits' => 'O campo :attribute precisa ter :digits dígitos',
            'before' => 'A data de nascimento inválida'
        ];
    }
}
