<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Assistant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssistantController extends Controller
{
    public function getQRCodes()
    {
        $assistants = Assistant::all();

        return view('admin-panel.assistants.qr-codes')->withAssistants($assistants);
    }
}
