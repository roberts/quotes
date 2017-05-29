<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->string('slug')->index();
            $table->string('title');
            $table->string('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('collections', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });

        Schema::table('collections', function ($table) {
            $table->unique(['user_id', 'slug'], 'unique_collection');
            $table->unique(['user_id', 'title'], 'unique_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('collections', function ($table) {
            $table->dropForeign(['user_id']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('collections');
        Schema::enableForeignKeyConstraints();
    }
}
