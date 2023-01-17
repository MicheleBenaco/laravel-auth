<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecnologies = ['html','css','vue','laravel','bootstrap','php','database','javascript'];
        foreach($tecnologies as $tecnology){
            $new_tecnology = new Tecnology;
            $new_tecnology->name = $tecnology;
            $new_tecnology->slug = Str::slug($new_tecnology->name, '-');
            $new_tecnology->save();
        }
    }
}
