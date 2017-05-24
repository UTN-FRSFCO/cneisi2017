<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Auth;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $profileId = $this->route('profile');
        if ($profileId == Auth::user()->userProfile->id) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'dni' => 'dni',
            'userType' => 'tipo de usuario',
            'university_region' => 'facultad regional',
            'legajo' => 'legajo',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'university_region.required_if' => trans('profiles.university_region_required'),
            'legajo.required_if'            => trans('profiles.legajo_required'),
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'dni'   => [
                'required',
                'integer',
                'digits_between :7,8',
                Rule::unique('users_profiles')->ignore(Auth::user()->id, 'user_id'),
            ],
            'userType'              => 'required|min:5|max:255',
            'university_region'     => 'required_if:userType,student,graduated|min:5|max:255|nullable',
            'legajo'                => 'required_if:userType,student|integer|digits_between :4,7|nullable'
        ];
    }
}
