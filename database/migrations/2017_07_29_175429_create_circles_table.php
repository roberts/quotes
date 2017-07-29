<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCirclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique()->index();
            $table->string('title')->unique()->index();
            $table->string('display_name')->nullable(); // If empty will use '{title} Personalities' -> exaample: "Sports Personalities" in "Business & Leadership Quotes from Sports Personalities"
            $table->string('description')->nullable();
            $table->tinyInteger('primary')->nullable()->unsigned()->index(); //id of primary circle for this secondary circle. Must be below 10.
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('circles');
    }
}
