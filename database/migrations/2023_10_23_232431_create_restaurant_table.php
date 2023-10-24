<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('restaurant', function (Blueprint $table) {
            $table->id(); // Restaurant ID (Primary Key)
            $table->string('name'); // Restaurant Name
            $table->text('description')->nullable(); // Description (nullable)
            $table->string('cuisine_type'); // Type of Cuisine
            $table->string('address'); // Address
            $table->boolean('is_open')->default(false); // Is Open with a default of false
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurant');
    }
};
