<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Conference;
use App\Entities\Speaker;
use App\ValueObjects\University;
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
        $speakers = Speaker::all();
        $events = Conference::all();
        $generalPublic = $this->getGeneralPublicAmount($users);
        $usersUniversity = $this->getUsersUniversity($users);

        
        return view('admin-panel.main-panel')
            ->with('users', $users)
            ->with('speakers', $speakers)
            ->with('generalPublic', $generalPublic)
            ->with('usersUniversity', $usersUniversity)
            ->with('events', $events);
    }

    private function getUsersUniversity($users)
    {
        $buenos_aires = 0;
        $concepcion_uruguay = 0;
        $cordoba = 0;
        $delta = 0;
        $la_plata = 0;
        $mendoza = 0;
        $rosario = 0;
        $resistencia = 0;
        $santa_fe = 0;
        $san_francisco = 0;
        $villa_maria = 0;
        $tucuman = 0;

        foreach ($users as $user) {
            switch ($user->userProfile['university_region']) {
                case 'buenos_aires':
                    ++$buenos_aires;
                    break;
                case 'concepcion_uruguay':
                    ++$concepcion_uruguay;
                    break;
                case 'cordoba':
                    ++$cordoba;
                    break;
                case 'delta':
                    ++$delta;
                    break;
                case 'la_plata':
                    ++$la_plata;
                    break;
                case 'mendoza':
                    ++$mendoza;
                    break;
                case 'resistencia':
                    ++$resistencia;
                    break;
                case 'rosario':
                    ++$rosario;
                    break;
                case 'san_francisco':
                    ++$san_francisco;
                    break;
                case 'santa_fe':
                    ++$santa_fe;
                    break;
                case 'tucuman':
                    ++$tucuman;
                    break;
                case 'villa_maria':
                    ++$villa_maria;
                    break;
            }
        }

        $usersUniversity = [
            'delta' => $delta,
            'buenos_aires' => $buenos_aires,
            'concepcion_uruguay' => $concepcion_uruguay,
            'cordoba'  => $cordoba,
            'san_francisco' => $san_francisco,
            'santa_fe' => $santa_fe,
            'tucuman' => $tucuman,
            'villa_maria' => $villa_maria,
            'rosario' => $rosario,
            'mendoza' => $mendoza,
            'resistencia' => $resistencia,
            'la_plata' => $la_plata
        ];

        return $usersUniversity;

    }
    
    private function getGeneralPublicAmount($users)
    {
        $userAmount = 0;
        foreach ($users as $user) {
            if ($user->userProfile['user_type'] == 'general_audience') {
                ++$userAmount;
            }
        }

        return $userAmount;
    }
}
