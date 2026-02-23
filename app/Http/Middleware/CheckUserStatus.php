<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next): Response
    {
        // Agar user login hai aur uska status 1 nahi hai (Inactive hai)
        if (Auth::check() && Auth::user()->status != 1) {
            Auth::logout(); // Use logout kar do

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('admin.login')->withErrors([
                'login' => 'Your account is inactive. Please contact the administrator.'
            ]);
        }

        return $next($request);
    }
}
