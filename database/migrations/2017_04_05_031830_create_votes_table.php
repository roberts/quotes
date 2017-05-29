<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('voteable_id');
            $table->unsignedInteger('voteable_type');
            $table->tinyInteger('value'); // 1 or -1
            $table->timestamps();
        });

        Schema::table('votes', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });

        Schema::table('votes', function($table) {
            $table->unique(['user_id', 'voteable_id', 'voteable_type'], 'unique_vote');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('votes', function ($table) {
            $table->dropForeign(['user_id']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('votes');
        Schema::enableForeignKeyConstraints();
    }
}
