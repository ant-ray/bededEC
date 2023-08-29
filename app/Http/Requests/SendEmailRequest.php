<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'resEmail' => 'required|email:filter|exists:users,email'
        ];
    }

    public function messages()
    {
        return [
            'resEmail.required' => ':attributeを入力してください',
            'resEmail.email' => '正しいメールアドレスの形式で入力してください',
            'resEmail.exists' => '登録している:attributeを入力してください'
        ];
    }

    public function attributes()
    {
        return [
            'resEmail' => 'メールアドレス',
        ];
    }
}
