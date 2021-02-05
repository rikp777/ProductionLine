<?php

namespace Database\Seeders;

use App\Models\Inset;
use Illuminate\Database\Seeder;

class InsetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insets = [
            [
                'id' => 'c8dc1893-dd65-4c32-ac12-99994c83dadf',
                'name' => 'CH052',
                'description' => 'CH052',
                'amount' => 770,
                'code' => 'ID0010XX',
                'color' => 'styro'
            ],
            [
                'id' => '0c9ec48e-fd72-49d4-a026-a654fd6d977d',
                'name' => 'CH050',
                'description' => 'CH050',
                'amount' => 770,
                'code' => 'ID0011XX',
                'color' => 'blauw'
            ],
            [
                'id' => '8bb26e75-d20a-48ca-ab45-9144acc84f0b',
                'name' => 'CH051',
                'description' => 'CH051',
                'amount' => 770,
                'code' => 'ID0012XX',
                'color' => 'groen'
            ]
        ];

        Inset::insert($insets);
    }
}
