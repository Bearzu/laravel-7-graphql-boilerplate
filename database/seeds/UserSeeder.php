<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User(['name' => 'Richard Abear', 'email' => 'richard@bearzu.com', 'password' => Hash::make('password')]);
        $user->save();
    }
}
