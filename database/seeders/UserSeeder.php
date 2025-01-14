<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAdmin = User::create([
            'name' => 'administrator',
            'email' => 'administrator@me.com',
            'password' => Hash::make('qazxdr123')
        ]);

        $userGeneral = User::create([
            'name' => 'test',
            'email' => 'test@me.com',
            'password' => Hash::make('password')
        ]);

        $userAdmin->assignRole('administrator');
        $userGeneral->assignRole('user');
    }
}
