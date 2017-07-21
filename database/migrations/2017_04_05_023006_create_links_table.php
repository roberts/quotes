<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->unsignedInteger('domain_id')->index();
            $table->unsignedInteger('link_type_id')->index();
            $table->unsignedInteger('linkable_type')->index();
            $table->unsignedInteger('linkable_id')->index();
            $table->boolean('approved')->default(1);
            $table->unsignedInteger('created_by')->index();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('links', function($table) {
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('link_type_id')->references('id')->on('link_types')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::table('links', function ($table) {
            $table->dropForeign(['domain_id']);
            $table->dropForeign(['link_type_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('links');
        Schema::enableForeignKeyConstraints();
    }
}
