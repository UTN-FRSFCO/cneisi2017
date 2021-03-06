<?php

namespace App\Http\Middleware;

use Closure;
use App\Entities\UserProfile;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Self_;

class CheckProfileFilled
{

    /**
     * Related routes.
     */
    const ROOT = '/';
    const EDIT_PROFILE = '/usuario/perfil/';


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guest() && empty(Auth::User()->userProfile->dni)) {
            return redirect(self::EDIT_PROFILE);
        }

        return $next($request);
    }
}
