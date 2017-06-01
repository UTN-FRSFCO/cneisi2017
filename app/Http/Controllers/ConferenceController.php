<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function getAll()
    {
        $conferences = Conference::all();

        return $conferences;
    }
}
