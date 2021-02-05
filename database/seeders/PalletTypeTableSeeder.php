<?php

namespace Database\Seeders;

use App\Models\PalletType;
use Illuminate\Database\Seeder;

class PalletTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $palletTypes = [
            [
                'id' => 'bac109f8-d3bc-42fe-8211-13bb555eb751',
                'name' => 'Plastic',
                'description' => 'Plastic',
                'weight' => 23000,
                'price' => 70
            ],
            [
                'id' => 'f878662d-8d8a-4844-af0f-e086bccc982a',
                'name' => 'Euro',
                'description' => 'Euro',
                'weight' => 25000,
                'price' => 8
            ],
            [
                'id' => '6450d5fb-39f2-40c2-922e-e176454c6ca2',
                'name' => 'DPA',
                'description' => 'DPA',
                'weight' => 15000,
                'price' => 9
            ],
        ];
        PalletType::insert($palletTypes);
    }
}
