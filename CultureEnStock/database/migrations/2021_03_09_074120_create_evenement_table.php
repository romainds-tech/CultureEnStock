<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();

            $table->foreignId('type_evenement_id')->constrained('type_evenements');
            $table->string('libelle', 100);

            $table->unsignedDecimal('prix');

            $table->integer('tmp_instal');
            $table->integer('tmp_desinstal');
            $table->integer('tmp_netoy');

            $table->date('date_debut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}
