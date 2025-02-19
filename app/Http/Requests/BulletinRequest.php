<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BulletinRequest extends FormRequest
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
            'title'              => 'required|max:255',
            'content'            => 'required|min:10',
            'category_id'        => 'required|exists:categories,id'
        ];
        abort(403, 'Unauthorized request method');
    }

    public function messages(): array
    {
        return [
            'title.required'       => 'タイトルは必須です。',
            'title.max'            => 'タイトルは255文字以内で入力してください。',
            'content.required'     => '内容は必須です。',
            'content.min'          => '内容は10文字以上で入力してください。',
            'category_id.required' => 'カテゴリーを選択してください。',
            'category_id.exists'   => '選択したカテゴリーが存在しません。',
        ];
    }
}
