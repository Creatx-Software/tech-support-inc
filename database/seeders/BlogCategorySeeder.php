<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogCategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Cybersecurity',
                'description' => 'Guidance on protecting your business from cyber threats, scams, and vulnerabilities.',
            ],
            [
                'name' => 'Cloud Computing',
                'description' => 'Insights on cloud migration, management, and collaboration tools.',
            ],
            [
                'name' => 'IT Support Tips',
                'description' => 'Practical tips and best practices to keep your systems running smoothly.',
            ],
            [
                'name' => 'Business Technology',
                'description' => 'Technology trends and strategy advice for growing businesses.',
            ],
            [
                'name' => 'Networking',
                'description' => 'Best practices for wired and wireless network infrastructure.',
            ],
            [
                'name' => 'Industry News',
                'description' => 'Updates on new tools, releases, and trends across the IT industry.',
            ],
        ];

        foreach ($categories as $category) {
            BlogCategory::updateOrCreate(
                ['slug' => Str::slug($category['name'])],
                [
                    'name' => $category['name'],
                    'description' => $category['description'],
                    'is_active' => true,
                ]
            );
        }
    }
}
