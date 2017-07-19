<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Conference;

class EventsPanelController
{

    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {
        $events = Conference::all();

        return view('admin-panel.events.index')
            ->with('events', $events);
    }
}
