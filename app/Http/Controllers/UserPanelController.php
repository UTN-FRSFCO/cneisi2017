<?php

namespace App\Http\Controllers;

use App\ValueObjects\University;
use Illuminate\Http\Request;
use App\Entities\User;
use Illuminate\Support\Facades\Auth;

class UserPanelController extends Controller
{
    /**
     * Related routes.
     */
    const ROOT = '/';

    /**
     * Related views.
     */
    const PROFILES_EDIT_VIEW  = 'user.panel';

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $user = Auth::User();
        $profile = Auth::User()->userProfile;

        $user_university = '';
        $university = new University();
        $universities = $university->getAll();
        foreach ($universities as $bd_value => $name) {
            if ($profile->getUniversityRegion() == strtolower($bd_value)) {
                $user_university = $name;
            }
        }

        return view('user.panel')
            ->with('user', $user)
            ->with('profile', $profile)
            ->with('university', $user_university);
    }
}
