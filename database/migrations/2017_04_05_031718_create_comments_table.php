<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('commentable_type')->index();
            $table->unsignedInteger('commentable_id')->index();
            $table->unsignedInteger('section')->nullable()->index();
            $table->unsignedInteger('reply')->nullable()->index();
            $table->text('text');
            $table->boolean('active')->default(1);
            $table->boolean('archived')->default(0); //Use when comment edited & replaced
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('comments', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('reply')->references('id')->on('comments')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function ($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['reply']);
        });

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('comments');
        Schema::enableForeignKeyConstraints();
    }
}
