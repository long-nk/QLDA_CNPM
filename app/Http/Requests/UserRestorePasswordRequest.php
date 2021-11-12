<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidatePassword;

class UserRestorePasswordRequest extends FormRequest
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
            'password'    => ['required','min:8','max:255',new ValidatePassword],
            'repassword'  => ['required','min:8','max:255',new ValidatePassword]
        ];
    }

    public function messages()
    {
        return [
            'password.required'      => 'Mật khẩu không được để trống',
            'password.min'           => 'Mật khẩu có dài tối thiểu là 8 ký tự',
            'password.max'           => 'Mật khẩu có độ tài tối đa là 255 ký tự',
            'repassword.required'    => 'Mật khẩu xác nhận không được để trống',
            'repassword.min'         => 'Mật khẩu xác nhận có dài tối thiểu là 8 ký tự',
            'repassword.max'         => 'Mật khẩu xác nhận có độ tài tối đa là 255 ký tự',
        ];
    }
}
