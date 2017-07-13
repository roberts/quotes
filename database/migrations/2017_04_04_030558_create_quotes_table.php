<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id')->index();
            $table->text('quote_text', 700);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('approved_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamp('approved_at');
            $table->timestamps();
            $table->softDeletes();
        });
        
        //then set autoincrement to 1,000,000
        DB::update("ALTER TABLE quotes AUTO_INCREMENT = 1000000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drops in Foreign Key Migration
    }
}
