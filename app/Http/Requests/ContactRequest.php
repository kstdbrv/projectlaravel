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
            'age' =>'required|numeric',
            'city' =>'required|min:3|max:20',
            'specialty' =>'required|min:3|max:20',
            'phone_number' =>'required',
            'surname' =>'required|min:3|max:20',
            'gender' =>'required|min:1|max:1',
            'education' =>'required|min:3|max:20',
            'employment' =>'required|min:3|max:20'
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Поле имя является обязательным!',
          'email.required' => 'Поле почта является обязательным!',
          'age.required' => 'Поле возраст является обязательным!',
          'city.required' => 'Поле город является обязательным!',
          'specialty.required' => 'Поле специальность является обязательным!',
          'phone_number.required' => 'Поле телефон является обязательным!',
          'surname.required' => 'Поле фамилия является обязательным!',
          'gender.required' => 'Поле пол является обязательным!',
          'employment.required' => 'Поле занятость является обязательным!',
          'education.required' => 'Поле образование является обязательным!'
        ];
    }
}
