<?php

namespace App\Http\Controllers;

use App\Entities\Conference;
use Illuminate\Http\Request;
use App\Http\Controllers\SpeakerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Entities\Speaker;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {
        //$this->loadSpeakersFromJson();
        //$this->loadConferencesFromJson();

        $speakers = Speaker::all()->sortByDesc('score');
        $conferencesCount = count(Conference::whereNotNull('speaker_id')->get());
        $conferences = $this->loadConferences();
        $assistancesConferences = [];

        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $conferencesAssistances = DB::table('conference_user')
                ->whereUserId($user_id)
                ->pluck('conference_id');
            foreach ($conferencesAssistances as $assistances) {
                array_push($assistancesConferences, $assistances);
            }
        }

        return view('home')
            ->with('speakers', $speakers)
            ->with('conferences', $conferences)
            ->with('conferencesAmount', $conferencesCount)
            ->with('conferenceIdAssistances', $assistancesConferences);
    }

    private function loadConferences() {

        $conferences = [];

        $day_one_auditorium_1 = Conference::
        whereBetween('date', ['2017-08-31 00:00:00', '2017-08-31 23:59:59'])
            ->orderBy('date', 'asc')
            ->get()
            ->where('auditorium', '=', 'auditorium_1');

        $conferences['day1_auditorium1'] = $day_one_auditorium_1;
        //array_push($conferences, $day_one_auditorium_1);

        $day_one_auditorium_2 = Conference::
        whereBetween('date', ['2017-08-31 00:00:00', '2017-08-31 23:59:59'])
            ->orderBy('date', 'asc')
            ->get()
            ->where('auditorium', '=', 'auditorium_2');

        $conferences['day1_auditorium2'] = $day_one_auditorium_2;
        //array_push($conferences, $day_one_auditorium_2);

        $day_one_auditorium_3 = Conference::
        whereBetween('date', ['2017-08-31 00:00:00', '2017-08-31 23:59:59'])
            ->orderBy('date', 'asc')
            ->get()
            ->where('auditorium', '=', 'auditorium_3');

        $conferences['day1_auditorium3'] = $day_one_auditorium_3;

        //array_push($conferences, $day_one_auditorium_3);

        $day_two_auditorium_1 = Conference::
        whereBetween('date', ['2017-09-01 00:00:00', '2017-09-01 23:59:59'])
            ->orderBy('date', 'asc')
            ->get()
            ->where('auditorium', '=', 'auditorium_1');

        $conferences['day2_auditorium1'] = $day_two_auditorium_1;
        //array_push($conferences, $day_two_auditorium_1);

        $day_two_auditorium_2 = Conference::
        whereBetween('date', ['2017-09-01 00:00:00', '2017-09-01 23:59:59'])
            ->orderBy('date', 'asc')
            ->get()
            ->where('auditorium', '=', 'auditorium_2');

        $conferences['day2_auditorium2'] = $day_two_auditorium_2;
        //array_push($conferences, $day_two_auditorium_2);

        $day_two_auditorium_3 = Conference::
        whereBetween('date', ['2017-09-01 00:00:00', '2017-09-01 23:59:59'])
            ->orderBy('date', 'asc')
            ->get()
            ->where('auditorium', '=', 'auditorium_3');

        $conferences['day2_auditorium3'] = $day_two_auditorium_3;
        //array_push($conferences, $day_two_auditorium_3);

        $day_three_auditorium_1 = Conference::
        whereBetween('date', ['2017-09-02 00:00:00', '2017-09-02 23:59:59'])
            ->orderBy('date', 'asc')
            ->get()
            ->where('auditorium', '=', 'auditorium_1');

        $conferences['day3_auditorium1'] = $day_three_auditorium_1;
        //array_push($conferences, $day_three_auditorium_1);

        $day_three_auditorium_2 = Conference::
        whereBetween('date', ['2017-09-02 00:00:00', '2017-09-02 23:59:59'])
            ->orderBy('date', 'asc')
            ->get()
            ->where('auditorium', '=', 'auditorium_2');

        $conferences['day3_auditorium2'] = $day_three_auditorium_2;

        //array_push($conferences, $day_three_auditorium_2);

        $day_three_auditorium_3 = Conference::
        whereBetween('date', ['2017-09-02 00:00:00', '2017-09-02 23:59:59'])
            ->orderBy('date', 'asc')
            ->get()
            ->where('auditorium', '=', 'auditorium_3');

        $conferences['day3_auditorium3'] = $day_three_auditorium_3;
        //array_push($conferences, $day_three_auditorium_3);

        return $conferences;
    }

    public function loadSpeakersFromJson() {

        $path = storage_path() . "/json/speakers.json";

        $speakers = json_decode(file_get_contents($path), true);

        foreach ($speakers['speakers'] as $speaker) {

            $record = Speaker::where('slug', '=', $speaker['slug'])->first();

            if ($record === null) {
                Speaker::create(
                    [
                        'picture' => $speaker['picture'],
                        'name' => $speaker['name'],
                        'slug' => $speaker['slug'],
                        'tagline' => $speaker['tagline'],
                        'description' => $speaker['description'],
                        'facebookLink' => $speaker['facebookLink'],
                        'googleLink' => $speaker['googleLink'],
                        'twitterLink' => $speaker['twitterLink'],
                        'video' => $speaker['video'],
                        'score' => $speaker['score'],
                    ]
                );
            }
        }
    }

    public function loadConferencesFromJson() {

        $path = storage_path() . "/json/conferences.json";

        $conferences = json_decode(file_get_contents($path), true);

        foreach ($conferences['conferences'] as $conference) {

            $record = Conference::where('slug', '=', $conference['slug'])->first();

            if ($record === null) {
                Conference::create(
                    [
                        'title' => $conference['title'],
                        'description' => $conference['description'],
                        'slug' => $conference['slug'],
                        'date' => date('Y-m-d H:i:s', $conference['date']),
                        'duration' => $conference['duration'],
                        'auditorium' => $conference['auditorium'],
                        'speaker_id' => $conference['speaker_id'],
                    ]
                );
            }
        }
    }

}
