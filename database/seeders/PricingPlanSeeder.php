<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PricingPlanSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $plans = [
            [
                'title' => 'Ad-Hoc Support',
                'badge' => 'Flexible',
                'price_amount' => null,
                'price_period' => 'per task / per hour',
                'description' => 'Flexible, pay-as-you-go IT support for occasional tasks.',
                'features' => [
                    ['text' => 'Support available as needed, no ongoing contract', 'included' => true],
                    ['text' => 'Unlimited remote & phone support for requested tasks', 'included' => true],
                    ['text' => 'Device troubleshooting & maintenance', 'included' => true],
                    ['text' => 'Setup & configuration of Wi-Fi access points, routers & switches', 'included' => true],
                    ['text' => 'Microsoft 365 assistance', 'included' => true],
                    ['text' => 'No minimum users required', 'included' => true],
                    ['text' => 'No setup or onboarding fees', 'included' => true],
                    ['text' => 'Free onsite visit', 'included' => true],
                    ['text' => 'Fast response times depending on task priority', 'included' => true],
                ],
                'is_popular' => false,
                'is_feature' => true,
            ],
            [
                'title' => 'Essential Support',
                'badge' => 'Essential',
                'price_amount' => 29,
                'price_period' => 'per user / month',
                'description' => 'Perfect for small businesses starting their IT journey.',
                'features' => [
                    ['text' => 'Extended Hours Support - 9 AM to 10 PM, Monday to Sunday', 'included' => true],
                    ['text' => 'Unlimited remote support', 'included' => true],
                    ['text' => 'Proactive system monitoring', 'included' => true],
                    ['text' => 'Monthly security updates', 'included' => true],
                    ['text' => 'Device management', 'included' => true],
                    ['text' => 'Microsoft 365 support', 'included' => true],
                    ['text' => '4-hour response SLA', 'included' => true],
                    ['text' => '24/7 Helpdesk', 'included' => false],
                    ['text' => 'Onsite visits included', 'included' => false],
                    ['text' => 'Dedicated account manager', 'included' => false],
                ],
                'is_popular' => false,
                'is_feature' => true,
            ],
            [
                'title' => 'Professional Support',
                'badge' => 'Professional',
                'price_amount' => 49,
                'price_period' => 'per user / month',
                'description' => 'Comprehensive IT support with 24/7 helpdesk access.',
                'features' => [
                    ['text' => '24/7 Helpdesk - round-the-clock support', 'included' => true],
                    ['text' => 'Unlimited remote & phone support', 'included' => true],
                    ['text' => 'Proactive monitoring & maintenance', 'included' => true],
                    ['text' => 'Advanced cybersecurity protection', 'included' => true],
                    ['text' => 'Priority device management', 'included' => true],
                    ['text' => 'Microsoft 365 expert support', 'included' => true],
                    ['text' => '1-hour response SLA', 'included' => true],
                    ['text' => '2 onsite visits per quarter', 'included' => true],
                    ['text' => 'Unlimited onsite visits', 'included' => false],
                    ['text' => 'Dedicated account manager', 'included' => false],
                ],
                'is_popular' => true,
                'is_feature' => true,
            ],
            [
                'title' => 'Premium Support',
                'badge' => 'Premium',
                'price_amount' => 99,
                'price_period' => 'per user / month',
                'description' => 'Complete managed IT with dedicated account management.',
                'features' => [
                    ['text' => '24/7 Priority Helpdesk - premium support access', 'included' => true],
                    ['text' => 'Unlimited remote, phone & onsite support', 'included' => true],
                    ['text' => 'Proactive monitoring & optimisation', 'included' => true],
                    ['text' => 'Enterprise-grade cybersecurity', 'included' => true],
                    ['text' => 'Complete infrastructure management', 'included' => true],
                    ['text' => 'Microsoft 365 & cloud optimisation', 'included' => true],
                    ['text' => '30-minute response SLA', 'included' => true],
                    ['text' => 'Unlimited onsite engineer visits', 'included' => true],
                    ['text' => 'Dedicated account manager', 'included' => true],
                    ['text' => 'Strategic IT consulting included', 'included' => true],
                ],
                'is_popular' => false,
                'is_feature' => false,
            ],
        ];

        foreach ($plans as $plan) {
            PricingPlan::updateOrCreate(
                ['slug' => Str::slug($plan['title'])],
                [
                    'title' => $plan['title'],
                    'badge' => $plan['badge'],
                    'price_amount' => $plan['price_amount'],
                    'price_period' => $plan['price_period'],
                    'description' => $plan['description'],
                    'features' => $plan['features'],
                    'is_popular' => $plan['is_popular'],
                    'is_feature' => $plan['is_feature'],
                    'is_active' => true,
                    'meta_title' => $plan['title'],
                    'meta_description' => $plan['description'],
                ]
            );
        }
    }
}
