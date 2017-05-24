<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_authors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('book_id')->index();
            $table->unsignedInteger('author_id')->index();
            $table->unsignedInteger('contribution_id');
            $table->unsignedInteger('created_by');
            $table->timestamps();

            $table->unique(['user_id', 'author_id']);
        });
        
        Schema::table('book_authors', function($table) {
            $table->foreign('book_id')->references('id')->on('books')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('contribution')->references('id')->on('book_contributions')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_authors', function ($table) {
            $table->dropForeign(['book_id']);
            $table->dropForeign(['author_id']);
            $table->dropForeign(['contribution']);
            $table->dropForeign(['created_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('book_authors');
        Schema::enableForeignKeyConstraints();
    }
}
