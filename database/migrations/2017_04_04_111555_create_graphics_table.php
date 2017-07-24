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
            $table->string('slug')->unique()->index();
            $table->unsignedInteger('image_type_id')->index();
            $table->unsignedInteger('graphicable_type')->index();
            $table->unsignedInteger('graphicable_id')->index();
            $table->boolean('approved')->default(1);
            $table->unsignedInteger('created_by')->index();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
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
