<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraphicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graphics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->index(); //includes mime type extension - need to force lowercase
            $table->string('path');
            $table->enum('mime', ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'psd']); //need to force lowercase
            $table->string('width');
            $table->string('height');
            $table->string('background_color');
            $table->unsignedInteger('image_type_id')->index();
            $table->string('graphicable_type')->index();
            $table->unsignedInteger('graphicable_id')->index();
            $table->unsignedInteger('headshot_id')->nullable();
            $table->unsignedInteger('created_by')->index();
            $table->unsignedInteger('updated_by');
            $table->timestamps();
            $table->timestamp('approved_at')->nullable()->useCurrent();  // remove useCurrent() later when approval process for Graphics
            $table->softDeletes();
        });

        Schema::table('graphics', function($table) {
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
        Schema::table('graphics', function ($table) {
            $table->dropForeign(['image_type_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('graphics');
        Schema::enableForeignKeyConstraints();
    }
}
