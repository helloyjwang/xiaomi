<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'request|uninque:user|regex:/\w{6,16}',
            'password' => 'request|regex:/\w{6,12}',
            'repass' => 'same:password',
            'email' => 'email',
            'phone' => 'regex:/1[3456789]\d{9}'
        ];
    }

    /**
     * 获取已定义验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.request' => '用户名不能为空',
            'username.regex' => '用户格式不正确',
            'password.required' => '密码不能为空',
            'password.regex' => '密码格式不正确',
            'repass.same' => '两次密码不一致 ',
            'email.email' => 'youxiang'
        ];
    }
}
