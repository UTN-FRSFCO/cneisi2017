<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpeakerRequest extends FormRequest
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
            'name' => 'required',
            'picture' => 'required',
            'slug' => 'required|unique:speakers,slug',
            'tagline' => 'required',
            'description' => 'required|max:5000',
            'score' => 'required|integer'
        ];
    }
}
