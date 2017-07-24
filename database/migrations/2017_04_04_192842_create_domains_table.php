<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain')->unique();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();
            $table->unsignedInteger('logo')->nullable();
            $table->boolean('include')->default(1);
            $table->timestamps();
        });

        Schema::table('domains', function($table) {
            $table->foreign('logo')->references('id')->on('tipoff_images')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('domains', function ($table) {
            $table->dropForeign(['logo']);
        });

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('domains');
        Schema::enableForeignKeyConstraints();
    }
}
