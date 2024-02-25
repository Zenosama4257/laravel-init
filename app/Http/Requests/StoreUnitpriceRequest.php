<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Month;
use Type_unit;

class StoreUnitpriceRequest extends FormRequest
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
            'type_unit'=>[
                'required',
                Rule::in([Type_unit::KWH,Type_unit::M3,Type_unit::DIAS])
            ],
            'month'=>[
                'required',
                Rule::in([
                    Month::ENERO,
                    Month::FEBRERO,
                    Month::MARZO,
                    Month::ABRIL,
                    Month::MAYO,
                    Month::JUNIO,
                    Month::JULIO,
                    Month::AGOSTO,
                    Month::SEPTIEMBRE,
                    Month::OCTUBRE,
                    Month::NOVIEMBRE,
                    Month::DICIEMBRE,
                ])
            ],
            'price'=>[
                'required'
            ],
        ];
    }
}
