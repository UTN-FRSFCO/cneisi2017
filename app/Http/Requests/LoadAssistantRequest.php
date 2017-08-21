<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoadAssistantRequest extends FormRequest
{
    const types =
        [
            'invited',
            'general',
            'buenos_aires',
            'concepcion',
            'cordoba',
            'delta',
            'la_plata',
            'mendoza',
            'resistencia',
            'rosario',
            'san_francisco',
            'santa_fe',
            'tucuman',
            'villa_maria',
        ];

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
            'file' => 'required',
            'type' => 'required'
        ];
    }
}