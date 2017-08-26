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
        if ($request->print == 'all') {

            $assistants = Assistant::where('type', '=', $request->input('type'))->get();

            $pdf = \PDF::loadView('admin-panel.assistants.qr-codes', ['assistants' => $assistants]);

            return $pdf->stream($request->input('type') .'.pdf');
        } elseif ($request->print == 'individual') {
            $assistant = Assistant::where('dni', '=', $request->dni)->first();

            if ($assistant) {
                $pdf = \PDF::loadView('admin-panel.assistants.qr-codes', ['assistants' => [$assistant]]);

                return $pdf->stream('codigo_qr_' . $assistant->dni . '.pdf');
            }
        }

        return back()->with('error', 'DNI EXISTENTE');
    }

    public function getQRCodes()
    {
        $assistants = Assistant::all();

        return view('admin-panel.assistants.qr-codes')->withAssistants($assistants);
    }
}
