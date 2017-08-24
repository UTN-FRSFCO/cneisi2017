<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Assistant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssistantController extends Controller
{
    public function printCredentials()
    {
        return view('admin-panel.assistants.print-credentials');
    }

    public function qrCodes(Request $request)
    {
        if ($request->type == 'all') {
            $assistants = Assistant::all();

            return view('admin-panel.assistants.qr-codes')->with('assistants', $assistants);
        } elseif ($request->type == 'individual') {
            $assistant = Assistant::where('dni', '=', $request->dni)->first();

            if ($assistant) {
                return view('admin-panel.assistants.qr-codes')->with('assistants', [$assistant]);
            } else {
                return back()->with('error', 'ATENCIÓN!! DNI INEXISTENTE');
            }
        }
    }
}
