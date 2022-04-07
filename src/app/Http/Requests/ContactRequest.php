<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\models\Contact;


class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function attributes()
    {
        return [
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'message' => '内容',
            'name.required' => ':attribute の入力をお願いします',
            'email.required' => ':attribute  の入力をお願いします',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
        'name' => 'required|string|max:16|alpha',
        'email' => 'required|string|email',
        'message' => 'required|max:500|alpha_num',
      ];
    }
}
