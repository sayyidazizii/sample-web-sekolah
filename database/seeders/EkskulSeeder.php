<?php

namespace Database\Seeders;

use App\Models\Ekskul;
use Illuminate\Database\Seeder;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ekskul::create([
            'nama'     =>'OSIS',
            'image'    => 'osis.jpg',
            'desc'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        ]);
        Ekskul::create([
            'nama'     =>'Paskibraka',
            'image'    => 'pbb.jpg',
            'desc'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        ]);
        Ekskul::create([
            'nama'     =>'Pramuka',
            'image'    => 'pramuka.jpg',
            'desc'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        ]);
        Ekskul::create([
            'nama'     =>'PMR',
            'image'    => 'pmr.jpg',
            'desc'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        ]);
    }
}
