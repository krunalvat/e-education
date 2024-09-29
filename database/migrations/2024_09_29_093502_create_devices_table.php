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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('to_associate')->default(0);
            $table->float('latitudine')->default(0);
            $table->float('longitudine')->default(0);
            $table->string('name');
            $table->string('token_id')->nullable();
            $table->string('log_code')->nullable();
            $table->string('pin')->nullable();
            $table->datetime('last_check_date')->nullable();
            $table->datetime('last_position_date')->nullable();
            $table->datetime('last_offline_notification_date')->nullable();
            $table->datetime('last_noapp_notification_date')->nullable();
            $table->datetime('last_notification_date_ofposition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
