<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'        => 'required|unique:categories,name|max:50'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'     => 'タイトルは必須です。',
            'name.unique'       => 'タイトルは既に存在しています。',
            'name.max'          => 'タイトルは50文字以内で入力してください。'
        ];
    }
}
