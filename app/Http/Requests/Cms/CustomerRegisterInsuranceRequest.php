<?php

namespace App\Http\Requests\Cms;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRegisterInsuranceRequest extends FormRequest
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
            //
            'name' => 'required|max:191',
            'vga_code' => 'required|min:1|max:191',
            'package_buy' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'name là bắt buộc',
            'vga_code.required'=>'Ma vga là bắt buộc',
            'package_buy.required'=>'Goi mua là bắt buộc',
        ];
    }
}
