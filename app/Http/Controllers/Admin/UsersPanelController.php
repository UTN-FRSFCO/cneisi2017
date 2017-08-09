<?php

namespace App\Http\Controllers\Admin;

use App\Entities\User;
use App\ValueObjects\University;

class UsersPanelController
{

    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {
        $users = User::paginate(5);

        $university = new University();
        $universities = $university->getAll();
        $userProperties = [];
        $usersList = [];

        foreach ($users as $user) {
            $name = $user->getName() . ' ' . $user->getLastname();
            if (!is_null($name)) {
                array_push($userProperties, $name);
            } else {
                array_push($userProperties, ' - ');
            }

            if (!is_null($user['email'])) {
                array_push($userProperties, $user['email']);
            } else {
                array_push($userProperties, ' - ');
            }

            if (!is_null($user->userProfile['type'])) {
                switch ($user->userProfile['type']) {
                    case 'student':
                        array_push($userProperties, 'Estudiante');
                        break;
                    case 'general_audience':
                        array_push($userProperties, 'Público en gral.');
                        break;
                    case 'graduated':
                        array_push($userProperties, 'Graduado');
                        break;
                }
            } else {
                array_push($userProperties, ' - ');
            }

            if (!is_null($user->userProfile['university_region'])) {
                foreach ($universities as $bd_value => $name) {
                    if ($user->userProfile['university_region'] == strtolower($bd_value)) {
                        array_push($userProperties, $name);
                    }
                }
            } else {
                array_push($userProperties, ' - ');
            }

            array_push($usersList, $userProperties);
            $userProperties = [];
        }

        return view('admin-panel.users.index')
            ->with('users', $usersList)
            ->with('userss', $users);
    }
}
