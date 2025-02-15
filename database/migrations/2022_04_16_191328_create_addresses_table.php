<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('school_id')->nullable(); 
            $table->string('postal_address')->nullable(); 
            $table->string('gps_address')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->string('website')->nullable(); 
            $table->string('region')->nullable(); 
            $table->string('city')->nullable(); 
            $table->string('country')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
