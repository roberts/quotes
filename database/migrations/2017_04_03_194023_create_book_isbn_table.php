<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookIsbnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_isbn', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->unsignedInteger('author_id')->nullable();
            $table->string('author_bio')->nullable();
            $table->string('authors')->nullable();
            $table->string('title_slug')->nullable();
            $table->string('author_slug')->nullable();
            $table->string('isbn13', 13)->nullable();
            $table->string('isbn10', 10)->nullable();
            $table->string('price')->nullable();
            $table->string('format')->nullable();
            $table->string('publisher')->nullable();
            $table->string('pubdate')->nullable();
            $table->string('edition')->nullable();
            $table->string('subjects')->nullable();
            $table->string('lexile')->nullable();
            $table->string('pages')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('overview')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('synopsis')->nullable();
            $table->string('toc')->nullable();
            $table->string('editorial_reviews')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_isbn');
    }
}
