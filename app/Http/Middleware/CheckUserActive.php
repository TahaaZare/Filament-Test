<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserActive
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if (!$user || !$user->is_active) {
            // Redirect User TO Any Routes You Want
            return redirect()->route('login')->withErrors(['account' => 'حساب کاربری شما غیرفعال است.']);
        }

        return $next($request);
    }
}
