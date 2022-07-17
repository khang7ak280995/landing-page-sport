<?php

namespace App\Http\Requests\Cms;

use Illuminate\Foundation\Http\FormRequest;

class PromotionRequest extends FormRequest
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
            'title' => 'required|min:10|max:191',
            'description' => 'required|min:10|max:191',
            'content' => 'required|min:10'
        ];
    }

    public function messages()
    {
       return[
           'title.required'=>'Title là bắt buộc',
           'title.min'=>'Title toi thieu 10 ki tu',
           'description.required'=>'Description là bắt buộc',
           'content.required'=>'Content là bắt buộc',
       ];
    }
}
