<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('coaches', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('name'); // path or URL to image
        });
    }

    public function down()
    {
        Schema::table('coaches', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
    }
};
