<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $galleries = [
            [
                'title' => 'IT support engineer helping a client',
                'category_name' => 'IT Support',
                'image_path' => 'assets/images/gallery/5634764.webp',
            ],
            [
                'title' => 'Business benefits of managed IT support services',
                'category_name' => 'Cybersecurity',
                'image_path' => 'assets/images/home/Elevating_Performance_The_Benefits_of_IT_Support_Services_in_Business_.jpg',
            ],
            [
                'title' => 'Laptop connected to cloud backup services',
                'category_name' => 'Cloud & Backup',
                'image_path' => 'assets/images/about/pexels-negativespace-33997.jpg',
            ],
            [
                'title' => 'Technician troubleshooting a laptop',
                'category_name' => 'IT Support',
                'image_path' => 'assets/images/home/pexels-gabby-k-9480110.jpg',
            ],
            [
                'title' => 'Secure devices on an office desk',
                'category_name' => 'Cybersecurity',
                'image_path' => 'assets/images/about/pexels-negativespace-144235.jpg',
            ],
            [
                'title' => 'Cloud connectivity across devices',
                'category_name' => 'Cloud & Backup',
                'image_path' => 'assets/images/home/Untitled-design-88.png',
            ],
            [
                'title' => 'Helpdesk workspace with laptop and phone',
                'category_name' => 'IT Support',
                'image_path' => 'assets/images/about/pexels-thepaintedsquare-583847.jpg',
            ],
            [
                'title' => 'Mobile device security check',
                'category_name' => 'Cybersecurity',
                'image_path' => 'assets/images/about/pexels-morningtrain-18104.jpg',
            ],
            [
                'title' => 'Team reviewing data backup reports',
                'category_name' => 'Cloud & Backup',
                'image_path' => 'assets/images/about/pexels-pavel-danilyuk-7654127.jpg',
            ],
            [
                'title' => 'IT technician working on a support ticket',
                'category_name' => 'IT Support',
                'image_path' => 'assets/images/home/pexels-mizunokozuki-12899128.jpg',
            ],
            [
                'title' => 'Monitoring network security on dual laptops',
                'category_name' => 'Cybersecurity',
                'image_path' => 'assets/images/home/pexels-karola-g-5904067.jpg',
            ],
            [
                'title' => 'Cloud computing and file backup illustration',
                'category_name' => 'Cloud & Backup',
                'image_path' => 'assets/images/home/free-cloud-computing-illustration-zz38b.jpg',
            ],
        ];

        foreach ($galleries as $index => $gallery) {
            Gallery::updateOrCreate(
                ['image_path' => $gallery['image_path']],
                [
                    'title' => $gallery['title'],
                    'category_name' => $gallery['category_name'],
                    'sort_order' => $index,
                    'is_feature' => true,
                    'is_active' => true,
                ]
            );
        }
    }
}
