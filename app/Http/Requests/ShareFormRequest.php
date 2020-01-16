<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShareFormRequest extends FormRequest
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
            'email'=> 'required|email',
            'required'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'full_name'=>'required',
            'demand'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'email.required'=> 'Trường này bắt buộc phải nhập',
            'email.email'=>'Phải nhập đúng định dạng email',
            'required.required'=> 'Trường này bắt buộc phải nhập',
            'phone.required'=> 'Trường này bắt buộc phải nhập',
            'address.required'=> 'Trường này bắt buộc phải nhập',
            'full_name.required'=> 'Trường này bắt buộc phải nhập',
            'demand.required'=> 'Trường này bắt buộc phải nhập',


        ];
    }
}
