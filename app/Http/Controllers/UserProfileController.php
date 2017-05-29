<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Entities\User;
use App\Http\Requests\UpdateProfileRequest;
use App\Entities\UserProfile;
use App\Entities\University;
use App\Http\Requests;
use Auth;

class UserProfileController extends Controller
{
    /**
     * Related routes.
     */
    const ROOT = '/';

    /**
     * Related views.
     */
    const PROFILES_EDIT_VIEW  = 'user.profile.edit';

    public function edit()
    {
        $profile = Auth::User()->userProfile;
        $universities = new University();
        $userTypes = array(
            'student',
            'general_audience',
            'graduated'
        );

        return view(self::PROFILES_EDIT_VIEW)
            ->with('userProfile', $profile)
            ->with('universities', $universities->getAll())
            ->with('userTypes', $userTypes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProfileRequest $request
     * @param  int                  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, $id)
    {
        try {
            $profile = UserProfile::findOrFail($id);
            $profile->setDni($request->dni);
            $profile->setUserType($request->userType);

            if (!empty($request->university_region)) {
                $profile->setUniversityRegion(
                    strtolower($request->university_region)
                );
            }

            if (!empty($request->legajo)) {
                $profile->setLegajo($request->legajo);
            }

            $profile->save();

            return redirect()->to(route('user.panel'));

        } catch (Exception $e) {
            Session::flash('error', trans('users.profile_not_updated_message'));
        }

        return redirect()->to(self::ROOT);
    }
}
