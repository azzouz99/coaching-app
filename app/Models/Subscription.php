<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['user_id', 'paid', 'payment_date', 'payment_method'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
