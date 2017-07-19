<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Speaker;

class SpeakersPanelController
{

    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {
        $speakers = Speaker::all();

        return view('admin-panel.speakers.index')
            ->with('speakers', $speakers);
    }
}
