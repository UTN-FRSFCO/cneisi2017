<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Assistance;
use App\Entities\Assistant;
use App\Entities\Conference;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\DB;

class AssistancesPanelController extends Controller
{
    const INDEX_VIEW = 'admin-panel.assistances.index';
    const SHOW_VIEW = 'admin-panel.assistances.show';
    const CONFERENCE_VIEW = 'admin-panel.assistances.conferences';
    const BLOCK_VIEW = 'admin-panel.assistances.blocks';
    const ASSISTANT_VIEW = 'admin-panel.assistances.assistant';

    const DAY_ONE_REFERENCE = '08';
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

        foreach ($conferences as $conference) {
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

    public function byBlock()
    {
        $blockAssistanceList = [];

        $blocks = DB::table('blocks')->get();

        $blocks = $this->transformBlocks($blocks);

        foreach ($blocks as $block) {
            $conferences = Conference::all()->where('block_id', '=', $block['id']);

            $assistancesCount = 0;
            foreach ($conferences as $conference) {
                $assistances = Assistance::all()->where('conference_id', '=', $conference->id);
                $assistancesCount = $assistancesCount + count($assistances);
            }


            $data = [
                "id" => $block['id'],
                "time_start" => $block['time_start'],
                "time_end" => $block['time_end'],
                "assistances" => $assistancesCount
            ];

            array_push($blockAssistanceList, $data);
        }

        return view(self::BLOCK_VIEW)
            ->with('blocks', $blockAssistanceList);
    }

    public function byAssistant(string $type = null)
    {
        if ($type == 'all') {
            $assistants = DB::table('assistants')
                ->join('assistances', 'assistants.dni', '=', 'assistances.dni')
                ->select(
                    'assistants.id as id',
                    'assistants.dni as dni',
                    'assistants.firstname as firstname',
                    'assistants.lastname as lastname',
                    'assistants.type',
                    DB::raw("count(assistances.id) as assistanceCount")
                )
                ->groupBy('assistants.id')
                ->orderBy('assistanceCount', 'asc')
                ->paginate(20);
        } else {
            $assistants = DB::table('assistants')
                ->join('assistances', 'assistants.dni', '=', 'assistances.dni')
                ->select(
                    'assistants.id as id',
                    'assistants.dni as dni',
                    'assistants.firstname as firstname',
                    'assistants.lastname as lastname',
                    'assistants.type',
                    DB::raw("count(assistances.id) as assistanceCount")
                )
                ->where('assistants.type', '=', $type)
                ->groupBy('assistants.id')
                ->orderBy('assistanceCount', 'asc')
                ->paginate(20);
        }

        $conferenceAmount = Conference::all()->where('send_via_api', '=', true)->count();

        return view(self::ASSISTANT_VIEW)
            ->with('assistants', $assistants)
            ->with('conferenceAmount', $conferenceAmount);
    }

    public function byType(string $type = null)
    {
        $data = [];


        $conferenceAmount = Conference::all()->where('send_via_api', '=', true)->count();

        return view(self::ASSISTANT_VIEW);
    }

    private function transformBlocks($blocks)
    {
        $blockList = [];

        foreach ($blocks as $block) {
            if (substr($block->date_start, 5, 2) == self::DAY_ONE_REFERENCE) {
                $day = 'Dia 1';
            } else {
                $day = 'Dia 2';
            }

            $timeStart =  substr($block->date_start, 11, 5);
            $timeEnd =  substr($block->date_end, 11, 5);

            $block = [
                'id' => $block->id,
                'day' => $day,
                'time_start' => $timeStart,
                'time_end' => $timeEnd
            ];
            array_push($blockList, $block);
        }

        return $blockList;
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
