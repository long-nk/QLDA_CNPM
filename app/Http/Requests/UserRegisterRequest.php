<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidatePassword;

class UserRegisterRequest extends FormRequest
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
            'name'        => 'required|max:255',
            'email'       => 'required|max:255|unique:users,email',
            'phone'       => 'required|min:10|max:10',
            'password'    => ['required','min:8','max:255',new ValidatePassword]
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Họ tên không được để trống',
            'name.max'             => 'Họ tên có độ dài tối đa là 255 ký tự',
            'email.required'       => 'Email không được để trống',
            'email.max'            => 'Email có độ dài tối đa là 255 ký tự',
            'email.unique'         => 'Email này đã được đăng ký',
            'password.required'    => 'Mật khẩu không được để trống',
            'password.min'         => 'Mật khẩu có dài tối thiểu là 8 ký tự',
            'password.max'         => 'Mật khẩu có độ tài tối đa là 255 ký tự',
            'phone.required'       => 'Số điện thoai không được để trống',
            'phone.min'            => 'Số điện thoại chỉ có 10 chữ số',
            'phone.max'            => 'Số điện thoại chỉ có 10 chữ số',
        ];
    }
}
