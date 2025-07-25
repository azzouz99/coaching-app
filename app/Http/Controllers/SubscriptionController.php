<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function freeCheckout(int $period = 3)
    {
        $user = Auth::user();

        if ($user->subscription) {
            return redirect()
                ->route('dashboard')
                ->with('error', 'Vous avez déjà utilisé votre période d’essai ou vous êtes déjà abonné.');
        }

        // Calculate trial window
        $start = Carbon::now();
        $end   = $start->copy()->addMonths($period);

        // Create or update the subscription
        $subscription = Subscription::updateOrCreate(
            ['user_id' => $user->id],
            [
                'plan_interval'     => 'trial',
                'period_started_at' => $start,
                'period_ends_at'    => $end,
                'next_billing_at'   => $end,
                'canceled_at'       => null,
                'payment_method'    => 'free_trial',
            ]
        );

        return redirect()
            ->route('subscription.trial.success')
            ->with('status', "Vous bénéficiez d'un essai gratuit de {$period} mois jusqu'au {$end->format('d/m/Y')}.");

    }
    public function checkout()
    {
        return view('subscription.checkout');
    }

    public function process(Request $request)
    {
        // Ici vous implémenterez la logique de paiement avec Stripe, PayPal, etc.
        
        // Après le paiement réussi, créez l'abonnement
        $sub = $request->user()->subscription;

        // If no subscription yet, create one
        if (! $sub) {
            $sub = Subscription::create([
                'user_id'       => $request->user()->id,
                'plan_interval' => $request->plan_interval, // 'monthly' or 'yearly'
            ]);
        }

        // Start or renew the period
        $sub->startNewPeriod();

        // Redirect to success
        return redirect()->route('subscription.success');
    }

    public function success()
    {
        return view('subscription.success');
    }
    public function trialSuccess()
{
    return view('subscription.trial-success')
        ->with('status', session('status'));
}
}
