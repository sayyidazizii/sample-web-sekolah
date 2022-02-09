<?php

namespace Database\Seeders;

use App\Models\Page;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->data();

        Page::upsert($data, ['id'], ['slug', 'judul', 'isi']);
    }

    public function data()
    {
        $faker = Factory::create();
        $allowTags = '<a><br></br><p><span><h1><h2><h3><h4><h5><ul><li><ol><b><i><strong><em>';

        return [[
            'id' => 1,
            'slug' => 'tentang',
            'judul' => 'Tentang',
            'isi' => strip_tags($faker->randomHtml(20), $allowTags),
        ], [
            'id' => 2,
            'slug' => 'sejarah',
            'judul' => 'Sejarah',
            'isi' => strip_tags($faker->randomHtml(20), $allowTags),
        ], [
            'id' => 3,
            'slug' => 'visi-misi',
            'judul' => 'Visi & Misi',
            'isi' => strip_tags($faker->randomHtml(20), $allowTags),
        ]];
    }
}
