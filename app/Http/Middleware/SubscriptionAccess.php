<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;
use Symfony\Component\HttpFoundation\Response;

class SubscriptionAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // If not logged in, redirect to login
        if (! $user) {
            return redirect()->route('login');
        }

        // No subscription or not active (expired/cancelled)
        if (! $user->subscription || ! $user->subscription->isActive()) {
            return redirect()
                ->route('subscription.checkout')
                ->with('error', 'Vous devez souscrire à un abonnement actif pour accéder à cette page.');
        }

        return $next($request);
    }
}
