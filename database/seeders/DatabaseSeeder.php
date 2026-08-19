<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->call(ServiceSeeder::class);
        $this->call(PricingPlanSeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(BlogTagSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(TestimonialSeeder::class);
    }
}
