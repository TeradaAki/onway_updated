<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('driver')) {
            Schema::create('driver', function (Blueprint $table) {
                $table->id('driver_id');
                $table->string('firstName');
                $table->string('lastName');
                $table->string('phoneNumber')->unique();
                $table->string('email')->unique();
                $table->string('vehicleType');
                $table->string('password');
                $table->string('address');
                $table->binary('license');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('driver');
    }
};
