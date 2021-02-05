<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Farmer;
use Illuminate\Database\Seeder;

class FarmerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //region Farmer one
        $farmerOne = new Farmer();
        $farmerOne->id = '7a204e95-b805-4124-bebe-ded843ea2973';
        $farmerOne->name = 'Test Farming House One';
        $farmerOne->street = 'Test Street';
        $farmerOne->house_number = 25;
        $farmerOne->place = 'Horst';
        $farmerOne->zip_code = '3498XS';
        $farmerOne->country = 'Netherlands';
        $farmerOne->province = 'Limburg';
        $farmerOne->email = 'TestFarmerOne@limax.nl';
        $farmerOne->phone = '1234567890';
        $farmerOne->fax = '1234567890';
        $farmerOne->kvk = '123456asdfgh';
        $farmerOne->save();

        // Relationships
        // Articles
        $farmerOne->articles()->attach(Article::all());
        //endregion

        //region Farmer two
        $farmerTwo = new Farmer();
        $farmerTwo->id = '73c07623-1c5d-4573-acdd-7ec8ba6cb00d';
        $farmerTwo->name = 'Test Farming House Two';
        $farmerTwo->street = 'Test Street';
        $farmerTwo->house_number = 65;
        $farmerTwo->place = 'Venray';
        $farmerTwo->zip_code = '2067JF';
        $farmerTwo->country = 'Netherlands';
        $farmerTwo->province = 'Limburg';
        $farmerTwo->email = 'TestFarmerTwo@limax.nl';
        $farmerTwo->phone = '09887654321';
        $farmerTwo->fax = '09887654321';
        $farmerTwo->kvk = 'asdfg123456';
        $farmerTwo->save();

        // Relationships
        // Articles
        $farmerTwo->articles()->attach(Article::all());
        //endregion
    }
}
