<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCheck extends FormRequest
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
            'account' => 'required',
            'password' => 'required',
            'nickName' => 'required',
            'email' => 'required|email' 
        ];
    }
    
    public function messages()
    {
        return [
            'account.required'    => trans('web/register.acc_required'),
            'password.required'    => trans('web/register.pss_required'),
            'nickName.required'    => trans('web/register.name_required'),
            'email.required'    => trans('web/register.email_required'),
            'email.email'    => trans('web/register.email_email'),
        ];
    }
}
