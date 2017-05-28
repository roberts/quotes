<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteAttributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_attributions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('quote_id')->index();
            $table->unsignedInteger('author_id')->index();
            $table->unsignedInteger('created_by');
            $table->timestamp('created_at');
        });

        Schema::table('quote_attributions', function($table) {
            $table->foreign('quote_id')->references('id')->on('quotes')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });

        Schema::table('quote_attributions', function($table) {
            $table->unique(['quote_id', 'author_id'], 'unique_attribute');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quote_attributions', function ($table) {
            $table->dropForeign(['quote_id']);
            $table->dropForeign(['author_id']);
            $table->dropForeign(['created_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('quote_attributions');
        Schema::enableForeignKeyConstraints();
    }
}
