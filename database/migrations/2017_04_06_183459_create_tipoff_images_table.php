<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoffImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoff_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique()->index();
            $table->unsignedInteger('image_type')->index();
            $table->unsignedInteger('content_type')->index();
            $table->unsignedInteger('content_id')->index();
            $table->boolean('approved')->default(1);
            $table->unsignedInteger('created_by')->index();
            $table->unsignedInteger('updated_by');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('tipoff_images', function($table) {
            $table->foreign('image_type')->references('id')->on('image_types')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::table('tipoff_images', function ($table) {
            $table->dropForeign(['image_type']);
            $table->dropForeign(['content_type']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tipoff_images');
        Schema::enableForeignKeyConstraints();
    }
}
