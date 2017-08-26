<?php

namespace App\Http\Controllers;

use App\Entities\Assistance;
use App\Entities\Conference;
use App\Http\Requests\StoreAssitanceRequest;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class AssistanceController extends Controller
{
    public function store(StoreAssitanceRequest $request)
    {
        try {
            $assistanceSearched = Assistance::where('dni', '=', $request->dni)
                ->where('conference_id', '=', $request->conference_id)->get();

            if ($assistanceSearched->count() === 0) {
                $assistance = new Assistance();
                $date = DateTime::createFromFormat('d/m/Y H:i:s', $request->date);
                $assistance->setDate($date);
                $assistance->setDni($request->dni);
                $assistance->setCatcherName($request->catcher_name);

                $conference = Conference::find($request->conference_id);
                $assistance->conference()->associate($conference);

                $assistance->save();
            }

            return response()->json(['status' => 'The resource is created successfully'], 200);
        } catch (Throwable $t) {
            Log::error($t->getMessage());
            Log::error($request->all());
            return response()->json(['status' => 'Error'], 500);
        }
    }
}
