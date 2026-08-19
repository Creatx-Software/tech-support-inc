<?php

namespace Database\Seeders;

use App\Models\BlogTag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogTagSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tags = [
            'Cybersecurity',
            'Cloud Migration',
            'Remote Work',
            'Data Backup',
            'Networking',
            'Microsoft 365',
            'Ransomware',
            'Small Business',
            'IT Trends',
            'Helpdesk',
            'Automation',
            'Disaster Recovery',
        ];

        foreach ($tags as $tag) {
            BlogTag::updateOrCreate(
                ['slug' => Str::slug($tag)],
                [
                    'name' => $tag,
                    'is_active' => true,
                ]
            );
        }
    }
}
