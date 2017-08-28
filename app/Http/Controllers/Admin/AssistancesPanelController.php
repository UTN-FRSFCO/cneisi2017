<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Assistance;
use App\Entities\Conference;
use App\Http\Controllers\Controller;
use Exception;

class AssistancesPanelController extends Controller
{
    const INDEX_VIEW = 'admin-panel.assistances.index';
    const SHOW_VIEW = 'admin-panel.assistances.show';
    const CONFERENCE_VIEW = 'admin-panel.assistances.conferences';

    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {
        $events = Conference::paginate(10);

        return view(SELF::INDEX_VIEW)
            ->with('events', $events);
    }

    public function byConference()
    {
        $conferenceAssistanceList = [];

        $conferences = Conference::all()->where('send_via_api', '=', true);

        foreach ($conferences as $conference)
        {
            $assistances = Assistance::all()->where('conference_id', '=', $conference->id);

            $data = [
              "id" => $conference->id,
              "title" => $conference->title,
              "block" => $conference->block_id,
                "assistants" => count($assistances)
            ];

            array_push($conferenceAssistanceList, $data);
        }

        return view(self::CONFERENCE_VIEW)
            ->with('conferences', $conferenceAssistanceList);
    }

    public function show(int $eventId)
    {
        $event = Conference::find($eventId);
        $assistances = Assistance::where('conference_id', '=', $eventId);

        return view(SELF::SHOW_VIEW)
            ->with('total', $assistances->count())
            ->with('assistances', $assistances->paginate(10))
            ->with('event', $event);
    }

    public function delete(int $id)
    {
        try {
            $assistance = Assistance::find($id);
            $event = $assistance->conference;

            Assistance::destroy($id);

            $assistances = Assistance::where('conference_id', '=', $event->getId())->paginate(10);

            return view(SELF::SHOW_VIEW)
                ->with('assistances', $assistances);
        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }
    }
}
