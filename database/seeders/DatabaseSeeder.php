<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //region Article
        $this->call(PalletTypeTableSeeder::class);
        $this->call(CaskTableSeeder::class);
        $this->call(InsetTableSeeder::class);
        $this->call(ArticleGroupTableSeeder::class);
        $this->call(SortTypeTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        //endregion

        //region Farmer
        $this->call(FarmerTableSeeder::class);
        //endregion

        //region User
        $this->call(UserTableSeeder::class);
        //endregion

        //region Farmer
        $this->call(CellTableSeeder::class);
        $this->call(PalletLabelTableSeeder::class);
        //endregion
    }
}
