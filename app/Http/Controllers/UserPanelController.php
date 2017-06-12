<?php

namespace App\Http\Controllers;

use App\Entities\Conference;
use App\ValueObjects\University;
use Illuminate\Http\Request;
use App\Entities\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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

        $conferences = Conference::orderBy('date', 'ASC')->get();

        $this->deleteOldConferences($conferences);

        $this->changeDatesFormat($conferences);

        $conferencesAssistances = $this->getConferencesAssistances();

        return view('user.panel')
            ->with('user', $user)
            ->with('profile', $profile)
            ->with('university', $user_university)
            ->with('conferences', $conferences)
            ->with('conferencesAssistances', $conferencesAssistances);
    }

    private function getConferencesAssistances() {
        $user_id = Auth::user()->id;
        $conferences = [];

        $conferencesAssistances = DB::table('conference_user')
            ->whereUserId($user_id)
            ->pluck('conference_id');
        foreach ($conferencesAssistances as $assistances) {
            array_push($conferences, Conference::find($assistances));
        }

        return $conferences;
    }

    private function deleteOldConferences($conferences) {
        foreach ($conferences as $key => $conference) {
            if($conference['date'] < Carbon::now() ) {
                unset($conferences[$key]);
            }
        }
        return $conferences;
    }

    /*
     * Receives an array of conferences
     * Changes date from (Y-m-d h:m:s) to (day h:m)
     */
    private function changeDatesFormat($conferences) {
        foreach ($conferences as $key => $conference) {

            $dateInNumbers = substr($conference['date'],0,10);
            $dateTimeInNumbers = substr($conference['date'],0,16);

            switch ($dateInNumbers) {
                case '2017-08-31':
                    $conference['date'] = str_replace($dateInNumbers,"Jueves", $dateTimeInNumbers);
                    break;
                case '2017-09-01':
                    $conference['date'] = str_replace($dateInNumbers,"Viernes", $dateTimeInNumbers);
                    break;
                case '2017-09-02':
                    $conference['date'] = str_replace($dateInNumbers,"Sábado", $dateTimeInNumbers);
                    break;
            }

        }
        return $conferences;
    }
}
