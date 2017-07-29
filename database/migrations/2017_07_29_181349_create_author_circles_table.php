<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorCircleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_circle', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id')->index();
            $table->unsignedInteger('circle_id')->index();
            $table->boolean('featured')->default(0); // Limit to 12 or less authors per circle_id that will be featured at top. They will also listed below in alphabetical section, so alrigt if more. 
            $table->unsignedInteger('created_by')->index();
            $table->timestamps();
        });

        Schema::table('author_circle', function ($table) {
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('circle_id')->references('id')->on('circles')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });

        Schema::table('author_circle', function($table) {
            $table->unique(['collection_id', 'collectionable_id', 'collectionable_type'], 'unique_item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('author_circle', function ($table) {
            $table->dropForeign(['author_id']);
            $table->dropForeign(['circle_id']);
            $table->dropForeign(['created_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('author_circle');
        Schema::enableForeignKeyConstraints();
    }
}
