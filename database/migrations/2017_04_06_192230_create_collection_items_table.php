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
            $table->integer('user_id')->index();
            $table->integer('collectionable_id');
            $table->integer('collectionable_type');
            $table->timestamps();
        });

        Schema::table('collection_items', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });

        Schema::table('collection_items', function($table) {
            $table->unique(['user_id', 'collectionable_id', 'collectionable_type'], 'unique_item');
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
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('collection_items');
        Schema::enableForeignKeyConstraints();
    }
}
