<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'dni'                   => 'required|integer|digits_between :7,8',
            'userType'              => 'required|min:5|max:255',
            'university_region'     => 'required_if:userType,student|required_if:userType,graduated|min:5|max:255',
            'legajo'                => 'required_if:userType,student|integer|digits_between :4,7'
        ];
    }
}
