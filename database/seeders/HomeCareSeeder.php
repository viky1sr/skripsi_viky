<?php

namespace Database\Seeders;

use App\Models\HomeCare\MasterHomeCare;
use Illuminate\Database\Seeder;

class HomeCareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_name = [
            'Suntuk Vit C Collagen 1000mg',
            'Suntuk Vit C Collagen 2000mg',
            'Suntik Nuerobian',
            'Infus Nuerobian',
            'Infus Whiting & Vit C',
            'Check Glukosa',
            'Check Asam Urat',
            'Check Cholesteral',
        ];

        $prices = [
            100000,
            150000,
            70000,
            200000,
            550000,
            15000,
            15000,
            30000,
        ];

        foreach($list_name as $key => $ls) {
            MasterHomeCare::firstOrCreate([
               'name' => $ls,
               'price' => $prices[$key]
            ]);
        }
    }
}
