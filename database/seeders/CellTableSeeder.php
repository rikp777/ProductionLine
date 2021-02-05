<?php

namespace Database\Seeders;

use App\Models\Cell;
use Illuminate\Database\Seeder;

class CellTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cells = [
            [
                'id' => '8209c91a-6392-4741-9ecd-a562e2354ba5',
                'number' => 1,
                'description' => 'Cell One',
                'farmer_id' => '7a204e95-b805-4124-bebe-ded843ea2973',
            ],
            [
                'id' => '65ef666a-71f7-4ce0-b3e8-04cc585ecf8b',
                'number' => 12,
                'description' => 'Cell Two',
                'farmer_id' => '7a204e95-b805-4124-bebe-ded843ea2973',
            ],
            [
                'id' => '293cc0a7-eb27-43e9-bd5c-d2a860e454f0',
                'number' => 1,
                'description' => 'Cell One',
                'farmer_id' => '73c07623-1c5d-4573-acdd-7ec8ba6cb00d',
            ],
            [
                'id' => '5d86061d-da43-4474-8289-8fbe200a4f59',
                'number' => 12,
                'description' => 'Cell Two',
                'farmer_id' => '73c07623-1c5d-4573-acdd-7ec8ba6cb00d',
            ]
        ];
        Cell::insert($cells);
    }
}
