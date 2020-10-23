<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\user_detail;
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
        $user = ['name' => 'Ko Mg Mg', 'email' => 'mgmg@gmail.com', 'password' => 123, 'role_id' => 1, 'image' => 'profile.jpg'];
        $user = User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
            'role_id' => $user['role_id'],
            'image' => $user['image'],

        ]);
        user_detail::create(['user_id' => $user->id]);

    }
}
