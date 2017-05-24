<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakeawaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takeaways', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('takeawayable_type')->index();
            $table->unsignedInteger('takeawayable_id')->index();
            $table->unsignedInteger('topic_id')->index()->default(1);
            $table->text('text');
            $table->boolean('active')->default(1);
            $table->boolean('archived')->default(0); //Use when recommendation edited & replaced
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('takeaways', function($table) {
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
        Schema::table('takeaways', function ($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['topic_id']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('takeaways');
        Schema::enableForeignKeyConstraints();
    }
}
