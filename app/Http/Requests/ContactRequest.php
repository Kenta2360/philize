<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'     => 'required|max:50',
            'email'    => 'required|string|email|max:255',
            'content'  => 'required|min:10',
        ];
        abort(403, 'Unauthorized request method');
    }

    public function messages(): array
    {
        return [
            'name.required'     => 'ユーザー名は必須です。',
            'name.max'          => 'このユーザー名は50文字以内で入力してください。',
            'email.required'    => 'メールアドレスは必須です。',
            'email.email'       => '正しいメールアドレス方式で入力してください。',
            'content.required'  => '内容は必須です。',
            'content.min'       => '内容は10文字以上で入力してください。'
        ];
    }
}
