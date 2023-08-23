<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Administrator',
            'username' => 'Administrator',
            'email' => 'administrator@dev.com',
            'password' => 'administrator!@#AMIN',
        ]);
    }
}
