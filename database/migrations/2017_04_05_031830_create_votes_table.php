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
            $table->integer('user_id')->index();
            $table->integer('voteable_id');
            $table->integer('voteable_type');
            $table->integer('value'); // 1 or -1
            $table->timestamps();
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
        Schema::dropIfExists('votes');
    }
}
