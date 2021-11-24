<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role', 255)->nullable();
            $table->string('school_id', 255)->nullable();
            $table->timestamps();
        });

         // Insert some stuff
        $roles=['admin', 'school','parent','student','teacher','account', 'superadmin', 'onboarding'];
        foreach($roles as $role){
            DB::table('roles')->insert(
                array(
                    'role' => $role,
                )
            );
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}