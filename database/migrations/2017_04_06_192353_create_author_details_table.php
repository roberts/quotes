<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id')->index();
            $table->string('full_name')->nullable();
            $table->date('birth')->nullable();
            $table->date('death')->nullable();
            $table->string('wikipedia_url')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->text('intro')->nullable();
            $table->text('known_for')->nullable();
            $table->text('bio')->nullable();
            $table->text('quotes_summary')->nullable();
            $table->text('books_summary')->nullable();
            $table->unsignedInteger('created_by');
            $table->timestamp('created_at'); // No updates allowed. Will only pull most recent author detail. Only one update per author by a user & deletes older entries.
        });

        Schema::table('author_details', function($table) {
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::table('author_details', function ($table) {
            $table->dropForeign(['author_id']);
            $table->dropForeign(['created_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('author_details');
        Schema::enableForeignKeyConstraints();
    }
}
