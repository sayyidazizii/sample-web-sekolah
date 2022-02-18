<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->data();

        Guru::upsert($data, ['id'], ['nama', 'foto', 'jabatan']);
    }

    public function data()
    {
        return [[
            'id' => 1,
            'nama' => 'Guru 1',
            'foto' => 'sample-image/guru-1.jpg',
            'jabatan' => 'Guru Pelajaran A',
        ], [
            'id' => 2,
            'nama' => 'Guru 2',
            'foto' => 'sample-image/guru-2.jpg',
            'jabatan' => 'Guru Pelajaran B',
        ], [
            'id' => 3,
            'nama' => 'Guru 3',
            'foto' => 'sample-image/guru-3.jpg',
            'jabatan' => 'Guru Pelajaran C',
        ], [
            'id' => 4,
            'nama' => 'Guru 4',
            'foto' => 'sample-image/guru-4.jpg',
            'jabatan' => 'Guru Pelajaran D',
        ], [
            'id' => 5,
            'nama' => 'Guru 5',
            'foto' => 'sample-image/guru-5.jpg',
            'jabatan' => 'Guru Pelajaran E',
        ],[
            'id' => 6,
            'nama' => 'Guru 6',
            'foto' => 'sample-image/user.png',
            'jabatan' => 'Guru Pelajaran f',
        ],[
            'id' => 7,
            'nama' => 'Guru 7',
            'foto' => 'sample-image/user.png',
            'jabatan' => 'Guru Pelajaran G',
        ],[
            'id' => 8,
            'nama' => 'Guru 8',
            'foto' => 'sample-image/user.png',
            'jabatan' => 'Guru Pelajaran H',
        ]];
    }
}
