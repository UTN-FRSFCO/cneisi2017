<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Assistance;
use App\Entities\Assistant;
use App\Entities\Conference;
use App\Enums\AssistantType;
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
    const BLOCK_TYPE_VIEW = 'admin-panel.assistances.block-and-type';

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

    public function byBlock(int $blockId)
    {
        $blockAssistanceList = [];

        $block = DB::table('blocks')->where('id', '=', $blockId)->first();

        $block = $this->transformOneBlock($block);

        $conferences = Conference::all()->where('block_id', '=', $blockId);

        $assistancesCount = 0;
        $universityCount = 0;
        $guestCount = 0;
        $generalPublicCount = 0;

        foreach ($conferences as $conference) {
            $assistances = Assistance::all()->where('conference_id', '=', $conference->id);
            $assistancesCount = $assistancesCount + count($assistances);

            foreach ($assistances as $assistance) {
                $assistant = DB::table('assistants')->where('dni', '=', $assistance->dni)->first();

                switch (Assistant::getParsedType($assistant->type)) {
                    case AssistantType::GUEST:
                        ++$guestCount;
                        break;
                    case AssistantType::GENERAL_PUBLIC:
                        ++$generalPublicCount;
                        break;
                    default:
                        ++$universityCount;
                }
            }
        }

        $data = [
            "id" => $block['id'],
            "time_start" => $block['time_start'],
            "time_end" => $block['time_end'],
            "university_total" => $universityCount,
            "guest_total" => $guestCount,
            "public_total" => $generalPublicCount,
            "total_assistants" => $assistancesCount
        ];

        array_push($blockAssistanceList, $data);

        $blocks = DB::table('blocks')->get();

        return view(self::BLOCK_VIEW)
            ->with('blocksInfo', $blockAssistanceList)
            ->with('blocks', $blocks);
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

    public function byType(int $blockId)
    {
        $conferences = Conference::all()
            ->where('block_id', '=', $blockId)
            ->where('send_via_api', '=', true);

        $buenosAiresCount = 0;
        $concepcionCount = 0;
        $cordobaCount = 0;
        $deltaCount = 0;
        $laPlataCount = 0;
        $mendozaCount = 0;
        $resistenciaCount = 0;
        $rosarioCount = 0;
        $sanFranciscoCount = 0;
        $santaFeCount = 0;
        $tucumanCount = 0;
        $villaMariaCount = 0;
        $trenqueLauquenCount = 0;

        foreach ($conferences as $conference)
        {
            $assistances = Assistance::all()
                ->where('conference_id', '=', $conference->id);

            foreach ($assistances as $assistance)
            {
                $assistant = Assistant::all()
                    ->where('dni', '=', $assistance->dni)->first();

                switch ($assistant->type) {
                    case 'buenos_aires':
                        ++$buenosAiresCount;
                        break;
                    case 'concepcion_uruguay':
                        ++$concepcionCount;
                        break;
                    case 'cordoba':
                        ++$cordobaCount;
                        break;
                    case 'delta':
                        ++$deltaCount;
                        break;
                    case 'la_plata':
                        ++$laPlataCount;
                        break;
                    case 'mendoza':
                        ++$mendozaCount;
                        break;
                    case 'resistencia':
                        ++$resistenciaCount;
                        break;
                    case 'rosario':
                        ++$rosarioCount;
                        break;
                    case 'san_francisco':
                        ++$sanFranciscoCount;
                        break;
                    case 'santa_fe':
                        ++$santaFeCount;
                        break;
                    case 'tucuman':
                        ++$tucumanCount;
                        break;
                    case 'villa_maria':
                        ++$villaMariaCount;
                        break;
                    case 'trenque_lauquen':
                        ++$trenqueLauquenCount;
                        break;
                }
            }
        }

        $buenosAiresTotal = Assistant::all()->where('type', '=', 'buenos_aires')->count();
        $concepcionTotal = Assistant::all()->where('type', '=', 'concepcion_uruguay')->count();
        $cordobaTotal = Assistant::all()->where('type', '=', 'cordoba')->count();
        $deltaTotal = Assistant::all()->where('type', '=', 'delta')->count();
        $laPlataTotal = Assistant::all()->where('type', '=', 'la_plata')->count();
        $mendozaTotal = Assistant::all()->where('type', '=', 'mendoza')->count();
        $resistenciaTotal = Assistant::all()->where('type', '=', 'resistencia')->count();
        $rosarioTotal = Assistant::all()->where('type', '=', 'rosario')->count();
        $sanFranciscoTotal = Assistant::all()->where('type', '=', 'san_francisco')->count();
        $santaFeTotal = Assistant::all()->where('type', '=', 'santa_fe')->count();
        $tucumanTotal = Assistant::all()->where('type', '=', 'tucuman')->count();
        $villaMariaTotal = Assistant::all()->where('type', '=', 'villa_maria')->count();
        $trenqueLauquenTotal = Assistant::all()->where('type', '=', 'trenque_lauquen')->count();

        $block = DB::table('blocks')->where('id', '=', $blockId)->first();
        $block = $this->transformOneBlock($block);

        $data = [
            'block' => $block,
            'buenos_aires'  =>  ($buenosAiresTotal != 0 ? round(($buenosAiresCount * 100) / $buenosAiresTotal,2) : 0),
            'concepcion_uruguay'  =>  ($concepcionTotal != 0 ? round(($concepcionCount * 100) / $concepcionTotal,2) : 0),
            'cordoba'  =>  ($cordobaTotal != 0 ? round(($cordobaCount * 100) / $cordobaTotal,2) : 0),
            'delta'  =>  ($deltaTotal != 0 ? round(($deltaCount * 100) / $deltaTotal,2) : 0),
            'la_plata'  =>  ($laPlataTotal != 0 ? round(($laPlataCount * 100) / $laPlataTotal,2) : 0),
            'mendoza'  =>  ($mendozaTotal != 0 ? round(($mendozaCount * 100) / $mendozaTotal,2) : 0),
            'resistencia'  =>  ($resistenciaTotal != 0 ? round(($resistenciaCount * 100) / $resistenciaTotal,2) : 0),
            'rosario'  =>  ($rosarioTotal != 0 ? round(($rosarioCount * 100) / $rosarioTotal,2) : 0),
            'san_francisco'  =>  ($sanFranciscoTotal != 0 ? round(($sanFranciscoCount * 100) / $sanFranciscoTotal,2) : 0),
            'santa_fe'  =>  ($santaFeTotal != 0 ? round(($santaFeCount * 100) / $santaFeTotal,2) : 0),
            'tucuman'  =>  ($tucumanTotal != 0 ? round(($buenosAiresCount * 100) / $tucumanTotal,2) : 0),
            'villa_maria'  =>  ($villaMariaTotal != 0 ? round(($villaMariaCount * 100) / $villaMariaTotal,2) : 0),
            'trenque_lauquen'  =>  ($trenqueLauquenTotal != 0 ? round(($trenqueLauquenCount * 100) / $trenqueLauquenTotal,2) : 0),
        ];

        $blocks = DB::table('blocks')->get();

        return view(self::BLOCK_TYPE_VIEW)
            ->with('data', $data)
            ->with('blocks', $blocks);
    }
    private function transformOneBlock($block)
    {
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

        return $block;
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
        $events = Conference::all();

        return view(SELF::SHOW_VIEW)
            ->with('total', $assistances->count())
            ->with('assistances', $assistances->paginate(10))
            ->with('events', $events)
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
