<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required | max:30',
            'text' => 'required'
        ];
    }
    public function messages()
{
    return [
        'title.required' => '・タイトルは必須です',
        'title.max' => '・タイトルは30文字以下です',
        'text.required' => '・記事は必須です'
    ];
}
}
