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
        Schema::create('device_log_positions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('device_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('devices');
            $table->date('date_day')->nullable();
            $table->datetime('detection_date')->nullable();
            $table->text('latitudine')->nullable();
            $table->string('longitudine')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('reverse_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_log_positions');
    }
};
