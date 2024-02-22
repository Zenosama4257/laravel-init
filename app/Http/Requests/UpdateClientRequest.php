<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClientRequest extends FormRequest
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
            'nif'=>[
                'required',
                Rule::unique('clients')->ignore($this->client->id)
            ],
            'simel'=>[
                'required',
                Rule::unique('clients')->ignore($this->client->id)
            ],
            'contact_name'=>[
                'required'
            ],
            'social_reason'=>[
                'required'
            ],
            'license'=>[
                'required'
            ],
            'rate'=>[
               'required'
            ],
            'url'=>[
                'required'
            ]
        ];
    }
}
