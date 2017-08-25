<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Assistant;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF;
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

            $pdf = \PDF::loadView('admin-panel.assistants.qr-codes', ['assistants' => $assistants]);

            return $pdf->stream('codigos_qr.pdf');

//            return view('admin-panel.assistants.qr-codes')->with('assistants', $assistants);
        } elseif ($request->type == 'individual') {
            $assistant = Assistant::where('dni', '=', $request->dni)->first();

            if ($assistant) {
                $pdf = \PDF::loadView('admin-panel.assistants.qr-codes', ['assistants' => [$assistant]]);

                return $pdf->stream('codigo_qr_' . $assistant->dni . '.pdf');
//                return view('admin-panel.assistants.qr-codes')->with('assistants', [$assistant]);
            } else {
                return back()->with('error', 'ATENCIÓN!! DNI INEXISTENTE');
            }
        }
    }
}
