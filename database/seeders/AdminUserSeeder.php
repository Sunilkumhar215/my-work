<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gkon.com'],
            [
                'name' => 'Gkon Admin',
                'phone'    => '9876543210',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}