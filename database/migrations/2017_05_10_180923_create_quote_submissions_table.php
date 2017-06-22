<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('quote_text', 700);
            $table->string('author_name');
            $table->string('book_name')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('isbn_10')->nullable();
            $table->integer('isbn_13')->nullable();
            $table->unsignedInteger('author_id')->index()->nullable();
            $table->unsignedInteger('book_id')->index()->nullable();
            $table->unsignedInteger('created_by');
            $table->timestamp('created_at');
        });
        
        Schema::table('quote_submissions', function($table) {
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::table('quote_submissions', function ($table) {
            $table->dropForeign(['author_id']);
            $table->dropForeign(['book_id']);
            $table->dropForeign(['created_by']);
        });

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('quote_submissions');
        Schema::enableForeignKeyConstraints();
    }
}
