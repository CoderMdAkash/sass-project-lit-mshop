<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SuperAdmin::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('@123456'),
        ]);
    }
}
