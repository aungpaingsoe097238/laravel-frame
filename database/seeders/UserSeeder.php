<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('password'),
        ])->roles()->sync(1);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => \Hash::make('password'),
        ])->roles()->sync(2);

    }
}
