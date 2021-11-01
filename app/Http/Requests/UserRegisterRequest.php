<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'lastName'    => 'required|max:255',
            'firstName'   => 'required|max:255',
            'email'       => 'required|max:255|unique:user,email',
            'phoneNumber' => 'required|min:10|max:10',
            'password'    => 'required|min:8|max:255'
        ];
    }

    public function messages()
    {
        return [
            'lastName.required'    => 'Họ không được để trống',
            'lastName.max'         => 'Họ có độ dài tối đa là 255 ký tự',
            'firstName.required'   => 'Tên không được để trống',
            'firstName.max'        => 'Tên có độ dài tối đa là 255 ký tự',
            'email.required'       => 'Email không được để trống',
            'email.max'            => 'Email có độ dài tối đa là 255 ký tự',
            'email.unique'         => 'Email này đã được đăng ký',
            'password.required'    => 'Mật khẩu không được để trống',
            'password.min'         => 'Mật khẩu có dài tối thiểu là 8 ký tự',
            'password.max'         => 'Mật khẩu có độ tài tối đa là 255 ký tự',
            'phoneNumber.required' => 'Số điện thoai không được để trống',
            'phoneNumber.min'      => 'Số điện thoại chỉ có 10 chữ số',
            'phoneNumber.max'      => 'Số điện thoại chỉ có 10 chữ số',
        ];
    }
}
