<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->foreign('profile_pic')->references('id')->on('user_images')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('cover_image')->references('id')->on('user_images')->onDelete('restrict')->onUpdate('cascade');
        });
        
        Schema::table('quotes', function($table) {
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
        
        Schema::table('authors', function($table) {
            $table->foreign('profile_pic')->references('id')->on('tipoff_images')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('cover_image')->references('id')->on('tipoff_images')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::table('users', function ($table) {
            $table->dropForeign(['profile_pic']);
            $table->dropForeign(['cover_image']);
        });

        Schema::table('quotes', function ($table) {
            $table->dropForeign(['author_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['approved_by']);
            $table->dropForeign(['updated_by']);
        });

        Schema::table('authors', function ($table) {
            $table->dropForeign(['profile_pic']);
            $table->dropForeign(['cover_image']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users');
        Schema::enableForeignKeyConstraints();

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('quotes');
        Schema::enableForeignKeyConstraints();

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('authors');
        Schema::enableForeignKeyConstraints();
    }
}
