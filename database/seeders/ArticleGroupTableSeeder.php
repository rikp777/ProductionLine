<?php

namespace Database\Seeders;

use App\Models\ArticleGroup;
use Illuminate\Database\Seeder;

class ArticleGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articleGroups = [
            [
                'id' => '6785a76f-1df9-4f5b-b031-ff5be444b747',
                'name' => 'Wit',
                'description' => 'Wit',
            ],
            [
                'id' => '7d71d800-cb2e-4917-b02a-cd8bed6f555c',
                'name' => 'Kastanje',
                'description' => 'Kastanje',
            ],
            [
                'id' => '4d4b3dca-69c5-4eb0-876b-59a463f05d79',
                'name' => 'Shiitake',
                'description' => 'Shiitake',
            ],
            [
                'id' => 'f2f4a59e-20c0-41c8-810d-d746994fa133',
                'name' => 'Oesterzwam',
                'description' => 'Oesterzwam',
            ],
            [
                'id' => '454a433f-40c6-4daa-bed1-c5c1d7fcf8d5',
                'name' => 'Portabella',
                'description' => 'Portabella',
            ]
        ];

        ArticleGroup::insert($articleGroups);
    }
}
