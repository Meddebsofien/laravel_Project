<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class SetBookingSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('booking')->check()) {
            $bookingId = session('booking_id');
            if ($bookingId) {
                $request->merge(['booking' => Booking::find($bookingId)]);
            }
        }

        return $next($request);
    }
}
