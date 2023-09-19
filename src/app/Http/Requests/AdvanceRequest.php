<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvanceRequest extends FormRequest
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
            'family-name' => ['required', 'string', 'max:255'],
            'given-name' => ['required', 'string', 'max:255'],
            'email' =>['required', 'string','max:255', 'email'],
            'postcode' =>['required','string',
            'max:8',],
            'prefecture_id' =>['required', 'string',],
            'content'=>['required','string','max:120,'],
        ];
    }
    public function messages()
    {
        return[
            'family-name.required' => '名前入力してください',
            'family-name.string' => '名前を文字列で入力してください',
            'family-name.max' => '名前を255文字以下で入力してください',
            'given-name.required' => '',
            'given-name.string' => '',
            'given-name.max' => '',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.string' => '郵便番号を文字列で入力してください',
            'postcode.max' => '郵便番号を８文字以下で入力してください',
            'prefecture_id.required' => '住所を入力してください',
            'prefecture_id.string' => '住所を文字列で入力してください',
            'content.required' => '問い合わせ内容を入力してください',
            'content.string' => '問い合わせ内容を文字列で入力してください',
            'content.max' => '問い合わせ内容を１２０文字以内で入力してください',
        ];

        
   }
}
