<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateBogPayment extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {
        $authUser = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : null;
        $authPassword = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : null;
        $user = User::where(['email' => $authUser, 'password' => $authPassword])->first();

        if ($user) {
            return $next($request);
        }
        abort(401);
    }
}
