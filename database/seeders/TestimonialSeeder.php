<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Emily Johnson',
                'avatar' => 'assets/images/testimonial/1.webp',
                'review_date' => '2025-03-12',
                'review' => "Our office network went down on a Friday afternoon and Tech Support Inc had us back up within the hour. Genuinely reassuring to have that level of response.",
            ],
            [
                'name' => 'Michael Brown',
                'avatar' => 'assets/images/testimonial/2.webp',
                'review_date' => '2025-02-28',
                'review' => 'Exceptional service from the first call to the final fix. The engineers are patient, knowledgeable, and always happy to explain what went wrong.',
            ],
            [
                'name' => 'Sophia Lee',
                'avatar' => 'assets/images/testimonial/3.webp',
                'review_date' => '2025-02-18',
                'review' => "Their proactive monitoring caught a failing server drive before it took down our files. That kind of early warning has saved us more than once.",
            ],
            [
                'name' => 'Daniel Martinez',
                'avatar' => 'assets/images/testimonial/4.webp',
                'review_date' => '2025-02-02',
                'review' => 'We moved our whole team to Microsoft 365 with barely any disruption. Tech Support Inc planned the migration carefully and kept us informed at every step.',
            ],
            [
                'name' => 'Olivia Wilson',
                'avatar' => 'assets/images/testimonial/5.webp',
                'review_date' => '2025-01-25',
                'review' => "Their cybersecurity review flagged gaps we didn't know we had and got them fixed fast. We finally feel confident about our data protection.",
            ],
            [
                'name' => 'James Anderson',
                'avatar' => 'assets/images/testimonial/6.webp',
                'review_date' => '2025-01-10',
                'review' => 'Automated backups and a solid disaster recovery plan mean we can finally sleep at night. Setup was smooth and the documentation was clear.',
            ],
            [
                'name' => 'Laura Bennett',
                'avatar' => 'assets/images/testimonial/7.webp',
                'review_date' => '2024-12-22',
                'review' => 'From our very first call, everything felt thoughtfully handled. They took the time to understand our setup, explained our options clearly, and delivered a support plan that actually fits how our business works.',
            ],
            [
                'name' => 'Thomas Müller',
                'avatar' => 'assets/images/testimonial/8.webp',
                'review_date' => '2024-12-18',
                'review' => 'Tech Support Inc strikes a perfect balance between technical expertise and genuine friendliness. Every ticket is handled quickly, and the overall experience has exceeded our expectations.',
            ],
            [
                'name' => 'Isabella Rossi',
                'avatar' => 'assets/images/testimonial/9.webp',
                'review_date' => '2024-12-10',
                'review' => 'Every detail felt intentional, from the initial IT audit to the ongoing helpdesk support. Response times are excellent and their remote support tools make getting help effortless.',
            ],
            [
                'name' => 'Daniel Wong',
                'avatar' => 'assets/images/testimonial/10.webp',
                'review_date' => '2024-12-05',
                'review' => 'Their on-site support is ideal for us—responsive, well-organised, and always thorough. Any hardware issue is diagnosed and resolved without disrupting our working day.',
            ],
            [
                'name' => 'Sophie Laurent',
                'avatar' => 'assets/images/testimonial/11.webp',
                'review_date' => '2024-11-30',
                'review' => 'We signed up for a trial support package and quickly upgraded to a full managed IT plan. The service quality and attention to detail made it an easy decision.',
            ],
            [
                'name' => 'Alexander Novak',
                'avatar' => 'assets/images/testimonial/12.webp',
                'review_date' => '2024-11-22',
                'review' => 'Tech Support Inc delivers a refined, professional experience without feeling overly corporate. Everything—from onboarding to day-to-day support—felt polished and thoughtfully executed.',
            ],
        ];

        foreach ($testimonials as $index => $testimonial) {
            Testimonial::updateOrCreate(
                ['name' => $testimonial['name'], 'review_date' => $testimonial['review_date']],
                [
                    'avatar' => $testimonial['avatar'],
                    'rating' => 5.0,
                    'review' => $testimonial['review'],
                    'sort_order' => $index,
                    'is_feature' => $index < 6,
                    'is_active' => true,
                ]
            );
        }
    }
}
