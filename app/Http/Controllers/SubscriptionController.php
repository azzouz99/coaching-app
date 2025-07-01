<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function checkout()
    {
        return view('subscription.checkout');
    }

    public function process(Request $request)
    {
        // Ici vous implémenterez la logique de paiement avec Stripe, PayPal, etc.
        
        // Après le paiement réussi, créez l'abonnement
        $subscription = new Subscription();
        $subscription->user_id = Auth::id();
        $subscription->status = 'active';
        $subscription->ends_at = null; // Abonnement à vie
        $subscription->save();

        return redirect()->route('dashboard')->with('success', 'Merci pour votre abonnement! Vous avez maintenant accès à toutes nos vidéos.');
    }

    public function success()
    {
        return view('subscription.success');
    }
}
