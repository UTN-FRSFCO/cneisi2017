<?php
namespace App\Http\Controllers\Admin;

use App\Entities\Conference;
use Illuminate\Support\Facades\DB;

class AssistancePanelController
{
    const INDEX_VIEW = 'admin-panel.assistance.index';

    public function index(string $conference = null)
    {
        if (is_null($conference) || $conference == 'all') {
            $assistantList = DB::table('assistants')->paginate(5);
        } else {
            $assistantList = DB::table('assistants')->where('type', '=', $conference)->paginate(5);
        }

        $conferences = Conference::all();

        return view(self::INDEX_VIEW)
            ->with('conferences', $conferences);
    }

    public function byConference(string $conference = null)
    {
        if (is_null($conference) || $conference == 'all') {
            $assistantList = DB::table('assistants')->paginate(5);
        } else {
            $assistantList = DB::table('assistants')->where('type', '=', $conference)->paginate(5);
        }

        $conferences = Conference::all();

        return view(self::INDEX_VIEW)
            ->with('conferences', $conferences);
    }
}
