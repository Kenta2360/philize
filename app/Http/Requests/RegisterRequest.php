<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages(): array
    {
        return [
            'username.required'   => 'ユーザー名は必須です。',
            'username.unique'     => 'このユーザー名は既に使用されています。',
            'email.required'      => 'メールアドレスは必須です。',
            'email.email'         => '正しいメールアドレス方式で入力してください。',
            'password.required'   => 'パスワードは必須です。',
            'password.min'        => 'パスワードは8文字以上で入力してください。',
            'password.confirm'    => 'パスワードが一致しません。'
        ];
    }
}
