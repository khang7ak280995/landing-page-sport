<?php

namespace App\Http\Requests\Cms;

use Illuminate\Foundation\Http\FormRequest;

class ListGolferWinHIORequest extends FormRequest
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
            'name'      => 'required|min:2|max:50',
            'date_post' => 'required',
            'amount'    => 'required',
            'yard'      => 'required',
            'stick'     => 'required',
            'facility'  => 'required|min:10|max:191',
            'hdc'       => 'required'
        ];
    }
}
