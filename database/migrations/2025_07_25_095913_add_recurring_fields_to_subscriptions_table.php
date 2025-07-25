<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->string('plan_interval')->default('monthly'); 
            // e.g. 'monthly', 'yearly'
            $table->timestamp('period_started_at')->nullable();
            $table->timestamp('period_ends_at')->nullable();
            $table->timestamp('next_billing_at')->nullable();
            $table->timestamp('canceled_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropColumn([
                'plan_interval', 'period_started_at',
                'period_ends_at', 'next_billing_at', 'canceled_at',
            ]);
        });
    }
};
