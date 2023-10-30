<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::create([
            'wedding_id'        => 1,
            'type'              => 'Akad',
            'date'              => '2023-01-05 09:00:00',
            'address'           => 'Kp.Garduh Des.Jagabaya Kec.Cimaung Kab.Bandung Jawa Barat',
            'maps'              => 'https://maps.app.goo.gl/FxqzoFn7wiCFFxhJ8',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Detail::create([
            'wedding_id'        => 1,
            'type'              => 'Resepsi',
            'date'              => '2023-07-05 09:00:00',
            'address'           => 'Kp.Babakan Rt.01/09 Des.Rancamanyar Kec.Baleendah Kab.Bandung Jawa Barat',
            'maps'              => 'https://maps.app.goo.gl/WKqtCH3T9CHHhifX9',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
