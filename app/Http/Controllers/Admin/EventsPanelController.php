<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Conference;
use App\Entities\Speaker;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateConferenceRequest;
use Exception;

class EventsPanelController
{
    const CREATE_VIEW = 'admin-panel.events.create';
    const INDEX_VIEW = 'admin-panel.events.index';
    const EDIT_VIEW = 'admin-panel.events.edit';

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

        return view(SELF::CREATE_VIEW)
            ->with('speakers', $speakers)
            ->with('events', $events);
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
                $date_event = date_format($date, '2017-08-31 '.$request->input('time').':00');
                break;
            case 'day_two':
                $date_event = date_format($date, '2017-09-01 '.$request->input('time').':00');
                break;
            case 'day_three':
                $date_event = date_format($date, '2017-09-02 '.$request->input('time').':00');
                break;
        }

            Conference::create(
            [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => $request->input('slug'),
                'duration' => $request->input('duration'),
                'auditorium' => $request->input('auditorium'),
                'speaker_id' => $request->input('speaker_id'),
                'date' => $date_event,
                'send_via_api' => ($request->input('send_via_api') ? true : false)
            ]
        );

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

            return view(SELF::EDIT_VIEW)
                ->with('speakers', $speakers)
                ->with('event', $event);
        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }
    }

    public function edit(int $id, UpdateConferenceRequest $request)
    {
        try {
            $event = Conference::findOrFail($id);

            try {
                $date = date_create();

                switch ($request->input('date')) {
                    case 'day_one':
                        $date_event = date_format($date, '2017-08-31 '.$request->input('time').':00');
                        break;
                    case 'day_two':
                        $date_event = date_format($date, '2017-09-01 '.$request->input('time').':00');
                        break;
                    case 'day_three':
                        $date_event = date_format($date, '2017-09-02 '.$request->input('time').':00');
                        break;
                }

                $event->title =$request->input('title');
                $event->description = $request->input('description');
                $event->slug = $request->input('slug');
                $event->duration = $request->input('duration');
                $event->auditorium = $request->input('auditorium');
                $event->speaker_id = $request->input('speaker_id');
                $event->date = $date_event;
                $event->send_via_api = ($request->input('send_via_api') ? true : false);

                $event->save();
                return back()->with('status', 'Evento editado satisfactoriamente');
            } catch (Exception $ex) {
                return back()->with('status', 'ATENCIÓN!! Evento no editado: ' . $ex->getMessage());
            }
        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }
    }
}
