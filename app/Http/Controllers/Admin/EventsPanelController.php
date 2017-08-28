<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Conference;
use App\Entities\Speaker;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class EventsPanelController
{
    const CREATE_VIEW = 'admin-panel.events.create';
    const INDEX_VIEW = 'admin-panel.events.index';
    const EDIT_VIEW = 'admin-panel.events.edit';

    const DAY_ONE_REFERENCE = '08';

    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {
        $events = Conference::paginate(5);

        return view(SELF::INDEX_VIEW)
            ->with('events', $events);
    }

    /**
     * Show the speakers create form.
     *
     * @return
     */
    public function createEvent()
    {
        $events = Conference::all();
        $speakers = Speaker::all();
        $blocks = DB::table('blocks')->get();

        $blocks = $this->transformBlocks($blocks);

        return view(SELF::CREATE_VIEW)
            ->with('speakers', $speakers)
            ->with('events', $events)
            ->with('blocks', $blocks);
    }

    /**
     * Saves a speaker
     *
     * @return
     */
    public function create(StoreEventRequest $request)
    {
        try {
            $date = date_create();

            switch ($request->input('date')) {
                case 'day_one':
                    $date_event = date_format($date, '2017-08-31 ' . $request->input('time') . ':00');
                    break;
                case 'day_two':
                    $date_event = date_format($date, '2017-09-01 ' . $request->input('time') . ':00');
                    break;
                case 'day_three':
                    $date_event = date_format($date, '2017-09-02 ' . $request->input('time') . ':00');
                    break;
            }

            $event = new Conference();
            $event->title = $request->input('title');
            $event->description = $request->input('description');
            $event->slug = $request->input('slug');
            $event->duration = $request->input('duration');
            $event->auditorium = $request->input('auditorium');
            $event->speaker_id = ($request->input('speaker_id') == 0) ? null : $request->input('speaker_id');
            $event->date = $date_event;
            $event->send_via_api = ($request->input('send_via_api') ? true : false);
            $event->block_id = ($request->input('block_id') == 0) ? null : $request->input('block_id');

            $event->save();
            return back()->with('status', 'Evento creado satisfactoriamente');
        } catch (Exception $ex) {
            return back()->with('status', 'ATENCIÓN!! Evento no guardado: ' . $ex->getMessage());
        }
    }

    public function delete(int $id)
    {
        try {
            Conference::destroy($id);

            $events = Conference::paginate(5);

            return view(SELF::INDEX_VIEW)
                ->with('events', $events)
                ->with('status', 'Evento eliminado satisfactoriamente');
        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }
    }

    public function editEvent(int $id)
    {
        try {
            $event = Conference::findOrFail($id);
            $speakers = Speaker::all();
            $blocks = DB::table('blocks')->get();

            $blocks = $this->transformBlocks($blocks);

            return view(SELF::EDIT_VIEW)
                ->with('speakers', $speakers)
                ->with('event', $event)
                ->with('blocks', $blocks);
        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }
    }

    public function edit(int $id, UpdateEventRequest $request)
    {
        try {
            $event = Conference::findOrFail($id);

            try {
                $date = date_create();

                switch ($request->input('date')) {
                    case 'day_one':
                        $date_event = date_format($date, '2017-08-31 ' . $request->input('time') . ':00');
                        break;
                    case 'day_two':
                        $date_event = date_format($date, '2017-09-01 ' . $request->input('time') . ':00');
                        break;
                    case 'day_three':
                        $date_event = date_format($date, '2017-09-02 ' . $request->input('time') . ':00');
                        break;
                }

                $event->title = $request->input('title');
                $event->description = $request->input('description');
                $event->slug = $request->input('slug');
                $event->duration = $request->input('duration');
                $event->auditorium = $request->input('auditorium');
                $event->speaker_id = ($request->input('speaker_id') == 0) ? null : $request->input('speaker_id');
                $event->date = $date_event;
                $event->send_via_api = ($request->input('send_via_api') ? true : false);
                $event->block_id = ($request->input('block_id') == 0) ? null : $request->input('block_id');

                $event->save();
                return back()->with('status', 'Evento editado satisfactoriamente');
            } catch (Exception $ex) {
                return back()->with('status', 'ATENCIÓN!! Evento no editado: ' . $ex->getMessage());
            }
        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }
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
}
