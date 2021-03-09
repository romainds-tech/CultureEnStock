<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('place_id')->constrained('places');
            $table->foreignId('evenement_id')->constrained('evenements');

            $table->unsignedDecimal('prix', $precision = 4, $scale = 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billets');
    }
}
