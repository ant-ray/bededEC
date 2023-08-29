<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class registerPostRequest extends FormRequest
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
            'regName' => 'required|max:20',
            'regEmail' => 'required|email',
            'regPassword' => 'required|min:5|',
            'regPasswordConfirm' => 'required|min:5'
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
                session()->put('kindFlgs', 'registerErr');
            }
        });
    }
}
