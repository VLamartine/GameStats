<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConexoAnswerRequest extends FormRequest
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
            'date' => 'date|required',
            'groups' => 'array|required|size:4',
            'groups.*.color' => 'string|required|in:orange,blue,green,purple',
            'groups.*.label' => 'string|required',
            'groups.*.words' => 'array|required|size:4',
            'groups.*.words.*' => 'string'
        ];
    }
}
