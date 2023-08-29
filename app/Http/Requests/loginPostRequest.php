<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginPostRequest extends FormRequest
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
            'logEmail' => 'required|email',
            'logPassword' => 'required'
        ];
    }

    /**
     * @param $validator
     */
    public function withValidator($validator)
    {
        // バリデーション完了後
        $validator->after(function ($validator) {
            // 入力エラーがあった場合
            if ($validator->errors()->any()) {
                session()->put('kindFlgs', 'loginErr');
            }
        });
    }
}
