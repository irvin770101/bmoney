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
   
        return [
            'password' => 'required',
            'checkPassworld' => 'required|same:password',
            'nickName' => 'required',
            'email' => 'required|email' 
        ];
    }
    
    public function messages()
    {
        return [
            'password.required'    => trans('web/register.pss_required'),
            'checkPassworld.required'    => trans('web/register.pss_required'),
            'nickName.required'    => trans('web/register.name_required'),
            'email.required'    => trans('web/register.email_required'),
            'email.email'    => trans('web/register.email_email'),
            'checkPassworld.same'    => trans('web/register.pss_different'),
        ];
    }
}
