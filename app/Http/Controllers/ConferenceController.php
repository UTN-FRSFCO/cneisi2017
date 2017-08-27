<?php

namespace App\Http\Controllers;

use App\Entities\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function getAll()
    {
        $conferences = Conference::where('send_via_api', '=', true)->get();

        return $conferences;
    }
}
