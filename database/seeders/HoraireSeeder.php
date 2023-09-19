<?php

namespace Database\Seeders;

use App\Models\Horaire;
use Illuminate\Database\Seeder;

class HoraireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horaire::create([
            'heureDepart'=>'7h'
        ]);

        Horaire::create([
            'heureDepart'=>'7h30'
        ]);

        Horaire::create([
            'heureDepart'=>'8h'
        ]);

        Horaire::create([
            'heureDepart'=>'8h30'
        ]);

        Horaire::create([
            'heureDepart'=>'9h30'
        ]);

        Horaire::create([
            'heureDepart'=>'10h'
        ]);

        Horaire::create([
            'heureDepart'=>'10h30'
        ]);

        Horaire::create([
            'heureDepart'=>'12h'
        ]);
        Horaire::create([
            'heureDepart'=>'12h30'
        ]);
        Horaire::create([
            'heureDepart'=>'14h'
        ]);
        Horaire::create([
            'heureDepart'=>'14h30'
        ]);
        Horaire::create([
            'heureDepart'=>'16h'
        ]);
        Horaire::create([
            'heureDepart'=>'16h30'
        ]);
        Horaire::create([
            'heureDepart'=>'18h'
        ]);
        Horaire::create([
            'heureDepart'=>'18h30'
        ]);
        Horaire::create([
            'heureDepart'=>'20h'
        ]);
        Horaire::create([
            'heureDepart'=>'20h30'
        ]);
        Horaire::create([
            'heureDepart'=>'22h'
        ]);
        Horaire::create([
            'heureDepart'=>'22h30'
        ]);
    }
}
