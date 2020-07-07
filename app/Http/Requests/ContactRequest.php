<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' =>'required|min:3|max:20',
            'email' =>'required|email',
            'age' =>'required|numeric|min:1|max:2',
            'city' =>'required|min:3|max:20',
            'specialty' =>'required|min:3|max:20',
            'phone_number' =>'required',
            'surname' =>'required|min:3|max:20',
            'gender' =>'required',
            'education' =>'required|min:3|max:20',
            'employment' =>'required|min:3|max:20',
            'email' =>'required|email',
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Поле имя является обязательным!',

        ];
    }
}
