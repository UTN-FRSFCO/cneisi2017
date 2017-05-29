<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SpeakerController;
use App\Entities\Speaker;

class HomeController extends Controller
{
    public function index()
    {
        $this->loadSpeakersFromJson();
        $speakers = Speaker::all()->sortByDesc('score');

        return view('home')
            ->with('speakers', $speakers);
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
}
