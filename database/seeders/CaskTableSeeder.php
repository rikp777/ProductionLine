<?php

namespace Database\Seeders;

use App\Models\Cask;
use Illuminate\Database\Seeder;

class CaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $casks = [
            'id' => '0b150a4f-8648-427d-ac98-247442a5a146',
            'code' => 'EYSHDLS',
            'name' => 'BlaBla',
            'description' => 'BlaBla'
        ];

        Cask::insert($casks);
    }
}
