<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Speaker;
use Exception;

class SpeakerController extends Controller
{
    const INDEX_VIEW = 'speakers.index';
    const SHOW_VIEW = 'speakers.show';

    /**
     * Show the main page of speakers.
     *
     * @return
     */
    public function index()
    {
        $speakers = Speaker::all()->sortByDesc('score');

        return view(self::INDEX_VIEW)
            ->with('speakers', $speakers);
    }

    /**
     * Show a specific page of a Speaker.
     *
     * @return
     */
    public function show(string $slug)
    {
        try {
            $speaker = Speaker::where('slug', '=', $slug)->firstOrFail();
        } catch (Exception $e) {
            return abort(404);
        }

        return view(self::SHOW_VIEW)
            ->with('speaker', $speaker);
    }

    /**
     * Gets all saved Speakers
     *
     * @return
     */
    public function getAll()
    {
        $speakers = Speaker::all();

        return $speakers;
    }

    /**
     * Creates a Speaker
     *
     * @return
     */
    protected function create(array $data)
    {
        $speaker = Speaker::create(
            [
                'picture' => $data['picture'],
                'name' => $data['name'],
                'slug' => $data['slug'],
                'tagline' => $data['tagline'],
                'description' => $data['description'],
                'facebookLink' => $data['facebookLink'],
                'googleLink' => $data['googleLink'],
                'twitterlink' => $data['twitterlink'],
                'video' => $data['video'],
                'score' => $data['score'],
            ]
        );

        return $speaker;
    }
}
