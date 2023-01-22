<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
// logica de roles de usuario

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

            if($this->isMethod('PATCH')){
                return [
                    //reglas de validación cuando es PATCH
                    'title' => ['required', 'min:8'],
                    'body' => ['required'],
                ];
            }

        return [

            //reglas de validación para crear o por defecto
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ];
    }
}