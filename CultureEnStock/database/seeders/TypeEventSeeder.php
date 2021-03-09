<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeEvenement;
use Carbon\Carbon;

class TypeEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = TypeEvenement::create([
            'libelle' => 'cinema'
        ]);

        $type->evenements()->create([
            'libelle' => 'Frozen',
            'tmp_instal' => 20,
            'tmp_desinstal' => 30,
            'tmp_netoy' => 20,
            'date_debut' => Carbon::create('2021', '04', '23')
        ]);
    }
}
