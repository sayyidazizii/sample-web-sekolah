<?php

namespace Database\Seeders;
use App\Models\Kontak;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kontak::create([
            'alamat'    => 'Karanganyar,Jawa Tengah,Indonesia',
            'email'     => 'sekolahku@gmail.com',
            'whatsapp'  => '085602678871',
            'maps'      => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15819.549735348359!2d110.9519918!3d-7.5872298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9c84052b95a73cb!2sPT.%20Kusuma%20Kreasi%20Utama!5e0!3m2!1sen!2sid!4v1644391270549!5m2!1sen!2sid'
        ]);
    }
}
