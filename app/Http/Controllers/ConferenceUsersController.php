<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Conference;
use Illuminate\Support\Facades\DB;
use Auth;

class ConferenceUsersController extends Controller
{
    /**
     * Attach or detach assistance initiated by auth user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function atachOrDetachAssistances(Request $request)
    {
        if (Auth::check()) {
            $conference_id = $request->conference_id;

            $conference = Conference::find($conference_id);

            $user_id = Auth::user()->id;

            $assistance_exists = DB::table('conference_user')
                    ->whereConferenceId($conference_id)
                    ->whereUserId($user_id)
                    ->count() > 0;

            if ($assistance_exists) {
                $conference->users()->detach($user_id);
            } else {
                $conference->users()->attach($user_id);
            }
            return response($conference_id, 200);
        }
    }
}
