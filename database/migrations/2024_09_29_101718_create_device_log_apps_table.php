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
        Schema::create('device_log_apps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('device_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('devices');
            $table->datetime('first_opening_date')->nullable();
            $table->datetime('detection_date')->nullable();
            $table->datetime('end_of_use_date')->nullable();
            $table->date('date_day')->nullable();
            $table->string('app')->nullable();
            $table->string('package')->nullable();
            $table->string('name')->nullable();
            $table->integer('usage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_log_apps');
    }
};
