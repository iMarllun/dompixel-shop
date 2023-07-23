<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:0|max:255',
            'price' => 'required|numeric|min:0|max:9999.99',
            'quantity' => 'integer|min:1|max:9999999',
            'description' => 'nullable|max:65535',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'name.min' => 'O nome deve ter no mínimo 0 caracteres',
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
            'price.required' => 'O preço é obrigatório',
            'price.numeric' => 'O preço deve ser um número',
            'price.min' => 'O preço deve ser no mínimo 0',
            'price.max' => 'O preço deve ser no máximo 9999.99',
            'quantity.integer' => 'A quantidade deve ser um número inteiro',
            'quantity.min' => 'A quantidade deve ser no mínimo 1',
            'quantity.max' => 'A quantidade deve ser no máximo 9999999',
            'description.max' => 'A descrição deve ter no máximo 65535 caracteres',
        ];
    }
}
