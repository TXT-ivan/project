<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;


class  PastaCreate extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'text' => 'required|string',
            'pasta_name' => 'required|string|max:255',
            'active_time' => 'required',
            'access_type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'max' => 'Превышена длина параметра.',
            'string' => 'Некорректынй вид пасты.',
            'required' => 'Параметр не может быть пустым.'
        ];
    }
}
