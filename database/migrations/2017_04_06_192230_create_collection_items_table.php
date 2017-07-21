<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('collection_id')->index();
            $table->unsignedInteger('collectionable_type')->index();
            $table->unsignedInteger('collectionable_id')->index();
            $table->timestamps();
        });

        Schema::table('collection_items', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('restrict')->onUpdate('cascade');
        });

        Schema::table('collection_items', function($table) {
            $table->unique(['collection_id', 'collectionable_id', 'collectionable_type'], 'unique_item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('collection_items', function ($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['collection_id']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('collection_items');
        Schema::enableForeignKeyConstraints();
    }
}
