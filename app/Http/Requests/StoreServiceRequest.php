<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Type_service;

class StoreServiceRequest extends FormRequest
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
          "name_service" => ['required' ,'unique:services,name_service'],
          "start_service"  => ['required' ],
          "deadline_service"  => ['required'],
          "discount"  => ['required' ],
          "type_service"  => ['required',Rule::in([Type_service::FIJO,Type_service::VARIABLE,]) ],
          "start_discount" => ['required' ],
          "deadline_discount"  => ['required' ]
        ];
    }
}
