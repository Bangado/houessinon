<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() == 0) {
            User::create([
                'id' => (string) Str::uuid(),
                'name' => 'SuperAdmin Goura',
                'email' => 'superadmin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ]);
        }

    }
}
