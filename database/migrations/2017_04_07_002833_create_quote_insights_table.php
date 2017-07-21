<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteInsightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_insights', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('quote_id')->index();
            $table->text('text');
            $table->unsignedInteger('book_id')->nullable()->index();
            $table->unsignedInteger('chapter_id')->nullable()->index();
            $table->tinyInteger('day')->nullable();
            $table->date('publish_date')->nullable();
            $table->boolean('archived')->default(0); //Use when insight edited & replaced
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('quote_insights', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('quote_id')->references('id')->on('quotes')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('chapter_id')->references('id')->on('book_chapters')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quote_insights', function ($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['quote_id']);
            $table->dropForeign(['book_id']);
            $table->dropForeign(['chapter_id']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('quote_insights');
        Schema::enableForeignKeyConstraints();
    }
}
