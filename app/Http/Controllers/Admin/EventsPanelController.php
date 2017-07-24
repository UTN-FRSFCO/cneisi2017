<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Conference;
use App\Entities\Speaker;
use App\Http\Requests\StoreEventRequest;
use Exception;

class EventsPanelController
{
    const CREATE_VIEW = 'admin-panel.events.create';
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
    /**
     * Show the speakers create form.
     *
     * @return
     */
    public function createEvent()
    {
        $speakers = Speaker::all();

        return view(SELF::CREATE_VIEW)
            ->with('speakers', $speakers);
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
                'date' => $date_event
            ]
        );

        return back()->with('status', 'Evento creado satisfactoriamente');

        } catch (Exception $ex) {
            return back()->with('status', 'ATENCIÓN!! Evento no guardado: ' . $ex->getMessage());
        }
    }

    public function delete(int $id)
    {
        try
        {
            Speaker::destroy($id);

            $speakers = Speaker::paginate(5);

            return view(SELF::INDEX_VIEW)
                ->with('speakers', $speakers)
                ->with('status', 'Speaker eliminado satisfactoriamente');

        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }

    }

    public function editSpeaker(int $id)
    {
        try
        {
            $speaker = Speaker::findOrFail($id);

            return view(SELF::EDIT_VIEW)
                ->with('speaker', $speaker);
        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }

    }

    public function edit(int $id, UpdateSpeakerRequest $request)
    {
        try
        {
            $speaker = Speaker::findOrFail($id);

            $speaker->name = $request->input('name');
            $speaker->slug = $request->input('slug');
            $speaker->picture = $request->input('picture');
            $speaker->googleLink = $request->input('googleLink');
            $speaker->twitterLink = $request->input('twitterLink');
            $speaker->facebookLink = $request->input('facebookLink');
            $speaker->tagline = $request->input('tagline');
            $speaker->video = $request->input('video');
            $speaker->description = $request->input('description');
            $speaker->score = $request->input('score');

            $speaker->save();

            return back()
                ->with('speaker', $speaker)
                ->with('status', 'Speaker actualizado satisfactoriamente');
        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }

    }

}
