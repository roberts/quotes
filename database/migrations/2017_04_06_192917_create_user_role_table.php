<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('role_id');
            $table->timestamp('created_at');
        });
        
        Schema::table('user_role', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_role', function ($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['role_id']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('user_role');
        Schema::enableForeignKeyConstraints();
    }
}
