<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Speaker;

class SpeakerController extends Controller
{
    public function getAll()
    {
        $speakers = Speaker::all();

        return $speakers;
    }

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
