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
            $table->string('name')->unique()->index(); //includes mime type extension - need to force lowercase
            $table->string('path');
            $table->enum('mime', ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'psd']); //need to force lowercase
            $table->string('width');
            $table->string('height');
            $table->unsignedInteger('image_type_id')->index();
            $table->unsignedInteger('imageable_type')->index();
            $table->unsignedInteger('imageable_id')->index();
            $table->unsignedInteger('headshot_id')->nullable();
            $table->unsignedInteger('created_by')->index();
            $table->unsignedInteger('updated_by');
            $table->timestamps();
            $table->timestamp('approved_at')->nullable()->useCurrent();  // remove useCurrent() later when approval process for Tipoff Images
            $table->softDeletes();
        });

        Schema::table('tipoff_images', function($table) {
            $table->foreign('image_type_id')->references('id')->on('image_types')->onDelete('restrict')->onUpdate('cascade');
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
            $table->dropForeign(['image_type_id']);
            $table->dropForeign(['content_type']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tipoff_images');
        Schema::enableForeignKeyConstraints();
    }
}
