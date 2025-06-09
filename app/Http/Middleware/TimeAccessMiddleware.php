<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TimeAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $startHour = 9;
        $endHour = 17;
        $now = now();
        $currentHour = $now->hour;

        if ($currentHour < $startHour || $currentHour >= $endHour) {
            $message = "دسترسی فقط از ساعت {$startHour} صبح تا {$endHour} بعدازظهر مجاز است.";
            return response()->view('errors.custom.access-time', compact('message'), 403);
        }

        return $next($request);
    }
}
