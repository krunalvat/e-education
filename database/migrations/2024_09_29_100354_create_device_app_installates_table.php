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
        Schema::create('device_app_installates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('device_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('devices');
            $table->string('end_block')->nullable();
            $table->string('start_block')->nullable();
            $table->integer('maximum_time')->nullable()->default(0);
            $table->string('icon')->nullable();
            $table->string('name');
            $table->string('package');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_app_installates');
    }
};
