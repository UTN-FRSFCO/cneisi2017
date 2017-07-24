<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Speaker;
use App\Http\Requests\UpdateSpeakerRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreSpeakerRequest;
use Mockery\Exception;

class SpeakersPanelController
{
    const INDEX_VIEW = 'admin-panel.speakers.index';
    const EDIT_VIEW = 'admin-panel.speakers.edit';
    const CREATE_VIEW = 'admin-panel.speakers.create';

    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {
        $speakers = Speaker::paginate(5);

        return view(SELF::INDEX_VIEW)
            ->with('speakers', $speakers);
    }

    /**
     * Show the speakers create form.
     *
     * @return
     */
    public function createSpeaker()
    {
        return view(SELF::CREATE_VIEW);
    }

    /**
     * Saves a speaker
     *
     * @return
     */
    public function create(StoreSpeakerRequest $request)
    {
        Speaker::create(
            [
                'picture' => $request->input('picture'),
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'tagline' => $request->input('tagline'),
                'description' => $request->input('description'),
                'facebookLink' => $request->input('facebookLink'),
                'googleLink' => $request->input('googleLink'),
                'twitterLink' => $request->input('twitterLink'),
                'video' => $request->input('video'),
                'score' => $request->input('score'),
            ]
        );

        return back()->with('status', 'Speaker creado satisfactoriamente');
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
