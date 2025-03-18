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

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@idn.com',
            'password' => Hash::make('1234567890'),
            'role' => 1,
            // 'role' => 'admin',
            'phone' => '112233445566',
        ]);

        User::factory()->create([
            'name' => 'firja abiyu',
            'email' => 'ja@idn.com',
            'password' => Hash::make('123456789'),
            'role' => 0,
            // 'role' => 'admin',
            'phone' => '000888332211',
        ]);

        // User::factory(10)->create();

    }
}
