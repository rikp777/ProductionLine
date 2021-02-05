<?php

namespace Database\Seeders;

use App\Models\SortType;
use Illuminate\Database\Seeder;

class SortTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sortTypes = [
            [
                'id' => '638ce2ad-5cd0-4e94-a670-8953dde0f0ca',
                'name' => 'Fijn',
                'description' => 'Fijn',
            ],
            [
                'id' => 'c4898d66-b780-4cb7-ad95-7628a19a191d',
                'name' => 'Middel',
                'description' => 'Middel',
            ],
            [
                'id' => 'f1a2807c-33e1-40c6-b75e-237ee3513e8f',
                'name' => 'Reuze',
                'description' => 'Reuze',
            ],
            [
                'id' => 'f1072f03-538c-4778-8e9d-f15ccd04cf33',
                'name' => 'Industrie',
                'description' => 'Industrie',
            ],
        ];
        SortType::insert($sortTypes);
    }
}
