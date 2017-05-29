<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function getAll()
    {
        $speakers = Speaker::all();

        return $speakers;
    }
}
