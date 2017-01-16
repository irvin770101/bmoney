<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class LoginCheck extends FormRequest
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
            'acc' => 'required',
            'pss' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'acc.required'    => trans('web/login.acc_required'),
            'pss.required'    => trans('web/login.pss_required')
        ];
    }
}
