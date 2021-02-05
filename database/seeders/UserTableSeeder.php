<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // region User admin
        $userAdmin = new User();
        $userAdmin->id = '560488a3-d33e-46d7-9777-68245b13cdfc';
        $userAdmin->first_name = 'Admin';
        $userAdmin->last_name = 'Test';
        $userAdmin->email = 'admin@test.nl';
        $userAdmin->email_verified_at = now();
        $userAdmin->photo = 'https://microhealth.com/assets/images/illustrations/personal-user-illustration-@2x.png';
        $userAdmin->password = Hash::make('password');
        $userAdmin->save();
        // endregion

        // region User farmer
        $userFarmer = new User();
        $userFarmer->id = 'ab62c3bf-865b-4cab-815f-fcbf09cb8dd1';
        $userFarmer->first_name = 'Farmer';
        $userFarmer->last_name = 'Test';
        $userFarmer->email = 'farmer@test.nl';
        $userFarmer->email_verified_at = now();
        $userFarmer->photo = 'https://microhealth.com/assets/images/illustrations/personal-user-illustration-@2x.png';
        $userFarmer->password = Hash::make('password');
        $userFarmer->save();
        // endregion

    }
}
