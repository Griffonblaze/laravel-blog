<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
                //'title' => 'required|min:5|max:255',
                //'subtitle' => 'required|email|min:5|max:255'
            
        ];
    }



    /**
     * Get the validation rule messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            //'name.min' => 'remplis ça entre 5 et 255 caracteres',
            //'name.max' => 'remplis ça entre 5 et 255 caracteres',
            //'email.min' => 'remplis ça entre 5 et 255 caracteres',
            //'email.max' => 'remplis ça entre 5 et 255 caracteres'
        ];
    }

}
