<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Conference;
use App\Entities\User;
use App\ValueObjects\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Http\Requests\StoreBlockRequest;

class BlocksPanelController
{
    const INDEX_BLOCK = 'admin-panel.blocks.index';
    const CREATE_BLOCK = 'admin-panel.blocks.create';
    const ADD_CONFERENCE = 'admin-panel.blocks.conference-to-block';
    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {
        $blocks = DB::table('blocks')->get();

        return view(self::INDEX_BLOCK)
            ->with('blocks', $blocks);
    }

    /**
     * Show the blocks create form.
     *
     * @return
     */
    public function createBlock()
    {
        return view(self::CREATE_BLOCK);
    }

    /**
     * Saves a speaker
     *
     * @return
     */
    public function create(StoreBlockRequest $request)
    {
        try {
            $date = date_create();

            switch ($request->input('date')) {
                case 'day_one':
                    $date_start = date_format($date, '2017-08-31 '.$request->input('time_start').':00');
                    $date_end = date_format($date, '2017-08-31 '.$request->input('time_end').':00');
                    break;
                case 'day_two':
                    $date_start= date_format($date, '2017-09-01 '.$request->input('time_start').':00');
                    $date_end = date_format($date, '2017-08-31 '.$request->input('time_end').':00');
                    break;
            }

            DB::table('blocks')->insert(
                [
                    'date_start' => $date_start,
                    'date_end' => $date_end
                ]
            );


            return back()->with('status', 'Bloque creado satisfactoriamente');
        } catch (Exception $ex) {
            return back()->with('status', 'ATENCIÓN!! Bloque no guardado: ' . $ex->getMessage());
        }
    }

    public function conference()
    {
        $blocks = DB::table('blocks')->get();
        $conferences = Conference::all();

        return view(self::ADD_CONFERENCE)
            ->with('blocks', $blocks)
            ->with('conferences', $conferences);
    }

    public function addConference(Request $request)
    {
        try {
            $conference = Conference::findOrFail($request->input('conference'));

            $conference->block_id = $request->input('block');

            $conference->save()

            return back()->with('status', 'Conferencia agregada satisfactoriamente');
        } catch (Exception $ex) {
            return back()->with('status', 'ATENCIÓN!! Conferencia no guardada: ' . $ex->getMessage());
        }
    }
}
