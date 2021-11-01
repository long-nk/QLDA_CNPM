<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'email'    => 'required|max:255',
            'password' => 'required|min:8|max:255',
            'g-recaptcha-response' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required'    => 'Email không được để trống',
            'email.max'         => 'Email có độ dài tối đa là 255 ký tự',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min'      => 'Mật khẩu có dài tối thiểu là 8 ký tự',
            'password.max'      => 'Mật khẩu có dài tối đa là 255 ký tự',
            'g-recaptcha-response.required' => ' Vui lòng xác minh'
        ];
    }
}
