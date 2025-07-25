<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'user_id', 'plan_interval', 
        'period_started_at', 'period_ends_at', 
        'next_billing_at', 'canceled_at',
    ];

    protected $casts = [
        'period_started_at' => 'datetime',
        'period_ends_at'    => 'datetime',
        'next_billing_at'   => 'datetime',
        'canceled_at'       => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /** Has the current period not yet expired? */
    public function isActive(): bool
    {
        return is_null($this->canceled_at)
            && $this->period_ends_at
            && $this->period_ends_at->isFuture();
    }

    /** Start or renew the subscription period */
    public function startNewPeriod(): void
    {
        $now = Carbon::now();

        // If first time, period starts now; else from previous end
        $start = $this->period_ends_at && $this->period_ends_at->isFuture()
            ? $this->period_ends_at
            : $now;

        // Determine end date based on interval
        $end = match ($this->plan_interval) {
            'yearly' => $start->copy()->addYear(),
            default  => $start->copy()->addMonth(),
        };

        $this->update([
            'period_started_at' => $start,
            'period_ends_at'    => $end,
            'next_billing_at'   => $end,
            'canceled_at'       => null,
        ]);
    }

    /** Cancel at period end */
    public function cancel(): void
    {
        $this->update(['canceled_at' => Carbon::now()]);
    }
}

