<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->datetime('departure');
            $table->datetime('return');
            $table->string('reference', 12);
            $table->string('address', 100);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->string('type', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
