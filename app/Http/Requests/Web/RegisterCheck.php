<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

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
    public function rules(Request $request)
    {
        $checkPassworld = $request->input('checkPassworld');
        $passworld = $request->input('passworld');

        return [
            'account' => 'required',
            'password' => 'required|same:'.$checkPassworld,
            'checkPassworld' => 'required|same:'.$passworld,
            'nickName' => 'required',
            'email' => 'required|email' 
        ];
    }
    
    public function messages()
    {
        return [
            'account.required'    => trans('web/register.acc_required'),
            'password.required'    => trans('web/register.pss_required'),
            'checkPassworld.required'    => trans('web/register.pss_required'),
            'password.same'    => trans('web/register.pss_different'),
            'checkPassworld.same'    => trans('web/register.pss_different'),
            'nickName.required'    => trans('web/register.name_required'),
            'email.required'    => trans('web/register.email_required'),
            'email.email'    => trans('web/register.email_email'),
        ];
    }
}
