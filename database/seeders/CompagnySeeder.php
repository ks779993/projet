<?php

namespace Database\Seeders;

use App\Models\Compagny;
use Illuminate\Database\Seeder;

class CompagnySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compagny::create([
            'name'=>'Saramaya'
        ]);
        
        Compagny::create([
            'name'=>'Elitis'
        ]);
        
        Compagny::create([
            'name'=>'SBTA'
        ]);
        
        Compagny::create([
            'name'=>'Rahimo'
        ]);

        Compagny::create([
            'name'=>'Rakieta'
        ]);
        
    }
}
