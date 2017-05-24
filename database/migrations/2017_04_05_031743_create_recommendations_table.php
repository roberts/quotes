<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('recommendable_type')->index();
            $table->unsignedInteger('recommendable_id')->index();
            $table->unsignedInteger('topic_id')->index()->default(1);
            $table->tinyInteger('rank')->default(6); // 1-10 value
            $table->tinyInteger('multiplier')->default(1);  // Up to 15x for staff
            $table->boolean('active')->default(1);
            $table->boolean('archived')->default(0); //Use when recommendation edited & replaced
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['user_id', 'recommendable_type', 'recommendable_id', 'topic_id']);
        });

        Schema::table('recommendations', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recommendations', function ($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['topic_id']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('recommendations');
        Schema::enableForeignKeyConstraints();
    }
}
