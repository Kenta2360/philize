<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'content'   => 'required|string|max:255',
            'board_id'  => 'required|exists:bulletin_boards,id'
        ];
    }

    public function messages(): array
    {
        return [
            'content.required'  => 'コメント内容は必須です。',
            'content.max'       => 'コメントは255文字以内で入力してください。',
            'board_id.required' => '掲示板IDが不正です。',
            'board_id.exists'   => '有効な掲示板が見つかりません。'
        ];
    }
}
