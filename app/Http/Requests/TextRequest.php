<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TextRequest extends FormRequest
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
            'modal__text' =>'required'
        ];
    }
    public function messages()
    {
        return [
          'modal__text.required' =>'Необходимо ввести сообщение!'
        ];
    }
}
