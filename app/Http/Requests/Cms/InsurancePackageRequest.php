<?php

namespace App\Http\Requests\Cms;

use Illuminate\Foundation\Http\FormRequest;

class InsurancePackageRequest extends FormRequest
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
            'title'             => 'required|max:50',
            'description'       => 'required|min:10|max:255',
            'amount'            => 'required',
            'bonuses'           => 'required',
            'hole_regulation'   => 'required|min:10|max:255',
            'note'              => 'required|min:10|max:255'
        ];
    }
}
