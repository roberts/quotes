<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('amazon_id')->unique();
            $table->string('google_id')->unique();
            $table->string('audible_id')->unique();
            $table->integer('isbn_13')->unique();
            $table->unsignedInteger('book_cover');
            $table->boolean('active')->default(1);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->timestamps();
        });

        Schema::table('books', function($table) {
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
        Schema::table('books', function ($table) {
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('books');
        Schema::enableForeignKeyConstraints();
    }
}
