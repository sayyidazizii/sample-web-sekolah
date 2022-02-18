<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;
use Database\Seeders\HomeSeeder;
use Database\Seeders\PageSeeder;
use Database\Seeders\BeritaSeeder;
use Database\Seeders\EkskulSeeder;
use Database\Seeders\GaleriSeeder;
use Database\Seeders\KontakSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GuruSeeder::class,
            GaleriSeeder::class,
            PageSeeder::class,
            BeritaSeeder::class,
            HomeSeeder::class,
            EkskulSeeder::class,
            KontakSeeder::class,
        ]);
    }
}
