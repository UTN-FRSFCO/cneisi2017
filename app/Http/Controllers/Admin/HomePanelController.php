<?php

namespace App\Http\Controllers\Admin;

use App\Entities\User;

class HomePanelController
{

    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {
        $users = User::all();

        return view('admin-panel.main-panel')
            ->with('users', $users);
    }
}
