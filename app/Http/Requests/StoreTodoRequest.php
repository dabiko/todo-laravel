<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTodoRequest extends FormRequest
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
            'title' => 'required|unique:todos|max:10|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Todo title is a required field',
            'title.unique' => ':input has been created already',
            'title.max' => 'Todo title must be greater than 10 characters',
            'title.min' => 'Todo title must be less than 3 characters',
        ];
    }
}
