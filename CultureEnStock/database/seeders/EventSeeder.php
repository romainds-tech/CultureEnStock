<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evenements')->insert([
            'type_evenement_id' => 1,
            'libelle' => 'Frozen',
            'tmp_instal' => 20,
            'tmp_desinstal' => 30,
            'tmp_netoy' => 20,
            'date_debut' => Carbon::create('2021', '04', '23')
        ]);
    }
}
