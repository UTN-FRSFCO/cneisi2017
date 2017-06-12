<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Entities\User;

class UpdatePasswordController extends Controller
{
    /**
     * Related views.
     */
    const UPDATE_PASSWORD_VIEW  = 'user.profile.change-password';

    public function update(UpdatePasswordRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $hashedPassword = $user->password;

        if (Hash::check($request->currentPassword, $hashedPassword)) {

            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            $request->session()->flash('success', trans('flash-messages.success_change_password'));

            return back();
        }

        $request->session()->flash('failure', trans('flash-messages.failure_change_password'));

        return back();
    }

    public function show()
    {
        return view(self::UPDATE_PASSWORD_VIEW)
            ->with('user', Auth::user());
    }
}
