<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('quote_id');
            $table->text('relevance', 2000)->nullable();
            $table->text('context', 2000);
            $table->date('quote_date')->nullable();
            $table->smallInteger('quote_year', 4)->nullable();
            $table->tinyInteger('quote_month', 2)->nullable();
            $table->tinyInteger('quote_day', 2)->nullable();
            $table->text('attribution', 2000)->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('quote_details', function($table) {
            $table->foreign('quote_id')->references('id')->on('quotes')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::table('quote_details', function ($table) {
            $table->dropForeign(['quote_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('quote_details');
        Schema::enableForeignKeyConstraints();
    }
}
