<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('book_id')->index();
            $table->unsignedTinyInteger('number');
            $table->string('title');
            $table->string('description')->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
        });

        Schema::table('book_chapters', function($table) {
            $table->foreign('book_id')->references('id')->on('books')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_chapters', function ($table) {
            $table->dropForeign(['book_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('book_chapters');
        Schema::enableForeignKeyConstraints();
    }
}
