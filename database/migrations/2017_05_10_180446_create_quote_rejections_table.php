<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteRejectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_rejections', function (Blueprint $table) {
            $table->increments('id');
            $table->text('quote_text', 700);
            $table->unsignedInteger('author_id')->index();
            $table->integer('likes')->nullable();
            $table->string('book_name')->nullable();
            $table->unsignedInteger('book_id')->nullable();
            $table->integer('isbn_13')->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('rejected_by');
            $table->timestamp('rejected_at');
            $table->timestamps();
        });
        
        Schema::table('quote_rejections', function($table) {
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('rejected_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quote_rejections', function ($table) {
            $table->dropForeign(['author_id']);
            $table->dropForeign(['book_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['rejected_by']);
        });

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('quote_rejections');
        Schema::enableForeignKeyConstraints();
    }
}
