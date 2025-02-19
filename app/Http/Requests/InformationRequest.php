<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
        if($this->isMethod('post')){
            return [
                'title'              => 'required|max:255',
                'intro'              => 'required|min:10',
                'category_id'        => 'required|exists:categories,id',
                'region_id'        => 'required|exists:regions,id',
                'sections'           => 'array',
                'sections.*.heading' => 'required|string|max:255',
                'sections.*.content' => 'required|string|min:5'
            ];
        }elseif($this->isMethod('patch')){
            return [
                'title'        => 'sometimes|required|max:255',
                'intro'      => 'sometimes|required|min:10',
                'category_id'  => 'sometimes|required|exists:categories,id',
                'category_id'  => 'sometimes|required|exists:regions,id',
                'sections'           => 'array',
                'sections.*.heading' => 'sometimes|required|string|max:255',
                'sections.*.content' => 'sometimes|required|string|min:5'
            ];
        }
        abort(403, 'Unauthorized request method');
    }

    public function messages(): array
    {
        return [
            'title.required'       => 'タイトルは必須です。',
            'title.max'            => 'タイトルは255文字以内で入力してください。',
            'intro.required'     => '内容は必須です。',
            'intro.min'          => '内容は10文字以上で入力してください。',
            'category_id.required' => 'カテゴリーを選択してください。',
            'category_id.exists'   => '選択したカテゴリーが存在しません。',
            'region_id.required' => '地域を選択してください。',
            'region_id.exists'   => '選択した地域が存在しません。',
            'sections.array'               => 'セクションの形式が正しくありません。',
            'sections.*.heading.required'  => '各セクションの見出しは必須です。',
            'sections.*.heading.max'       => '見出しは255文字以内で入力してください。',
            'sections.*.heading.string'    => '見出しは文字列で入力してください。',
            'sections.*.content.required'  => '各セクションの本文は必須です。',
            'sections.*.content.min'       => '本文は5文字以上で入力してください。',
            'sections.*.content.string'    => '本文は文字列で入力してください。'
        ];
    }
}
