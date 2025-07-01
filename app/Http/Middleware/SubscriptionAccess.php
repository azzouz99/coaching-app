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
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifier si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Vérifier si l'utilisateur a un abonnement payé
        $hasSubscription = Subscription::where('user_id', Auth::id())
                                      ->where('paid', true)
                                      ->exists();
        
        if (!$hasSubscription) {
            return redirect()->route('subscription.checkout')
                ->with('error', 'Vous devez souscrire à un abonnement payant pour accéder à cette page.');
        }

        return $next($request);
    }
}
