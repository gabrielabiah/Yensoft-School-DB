<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('school_name')->nullable();
            $table->string('postal_address_id')->nullable();
            $table->string('gps_address')->nullable();
            $table->string('country')->nullable();
            $table->string('date_registered')->nullable();
            $table->string('created_by')->nullable();
            $table->string('status')->nullable();
            $table->string('additional_data1')->nullable();
            $table->string('additional_data2')->nullable();
            $table->string('additional_data3')->nullable();
            $table->string('additional_data4')->nullable();
            $table->string('additional_data5')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
