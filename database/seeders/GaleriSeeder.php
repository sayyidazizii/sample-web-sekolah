<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->data();

        Galeri::upsert($data, ['id'], ['nama', 'foto']);
    }

    public function data()
    {
        return [[
            'id' => 1,
            'nama' => 'Foto 1',
            'foto' => 'sample-image/foto-1.jpg',
        ], [
            'id' => 2,
            'nama' => 'Foto 2',
            'foto' => 'sample-image/foto-2.jpg',
        ], [
            'id' => 3,
            'nama' => 'Foto 3',
            'foto' => 'sample-image/foto-3.jpg',
        ], [
            'id' => 4,
            'nama' => 'Foto 4',
            'foto' => 'sample-image/foto-4.jpg',
        ], [
            'id' => 5,
            'nama' => 'Foto 5',
            'foto' => 'sample-image/foto-5.jpg',
        ], [
            'id' => 6,
            'nama' => 'Foto 6',
            'foto' => 'sample-image/foto-6.jpg',
        ], [
            'id' => 7,
            'nama' => 'Foto 7',
            'foto' => 'sample-image/foto-1.jpg',
        ], [
            'id' => 8,
            'nama' => 'Foto 8',
            'foto' => 'sample-image/foto-2.jpg',
        ], [
            'id' => 9,
            'nama' => 'Foto 9',
            'foto' => 'sample-image/foto-3.jpg',
        ], [
            'id' => 10,
            'nama' => 'Foto 10',
            'foto' => 'sample-image/foto-4.jpg',
        ], [
            'id' => 11,
            'nama' => 'Foto 11',
            'foto' => 'sample-image/foto-5.jpg',
        ], [
            'id' => 12,
            'nama' => 'Foto 12',
            'foto' => 'sample-image/foto-6.jpg',
        ]];
    }
}
