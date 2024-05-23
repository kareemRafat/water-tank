<?php

namespace Database\Seeders;

use App\Models\ServiceProvider;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'ahmed',
            'email' => 'ahmed@mail.com',
            'password' => Hash::make('12345678'),
            'capacity' => '100l',
            'address' => 'حفر الباطن',
            'service_type' => 'منزلي'
        ]);

        ServiceProvider::create([
            'name' => 'islam',
            'email' => 'islam@mail.com',
            'password' => Hash::make(12345678),
            'company_name' => 'شركة حفر الباطن ',
        ]);

        ServiceProvider::create([
            'name' => 'emad',
            'email' => 'emad@mail.com',
            'password' => Hash::make(12345678),
            'company_name' => 'شركة الدمام ',
        ]);

        ServiceProvider::create([
            'name' => 'mostafa',
            'email' => 'mostafa@mail.com',
            'password' => Hash::make(12345678),
            'company_name' => 'شركة الحضري ',
        ]);
    }
}
