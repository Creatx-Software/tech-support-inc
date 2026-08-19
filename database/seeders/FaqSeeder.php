<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How quickly do you respond to support requests?',
                'answer' => 'Most support requests are acknowledged within minutes and resolved the same day. Critical issues are prioritised and handled immediately under our response-time guarantees.',
                'is_feature' => true,
            ],
            [
                'question' => 'Do you offer onsite support as well as remote?',
                'answer' => 'Yes, we provide both remote support for quick fixes and onsite visits for hardware, network, and hands-on issues across the UK.',
                'is_feature' => true,
            ],
            [
                'question' => 'Can you support businesses with no in-house IT team?',
                'answer' => 'Absolutely. We act as your outsourced IT department, handling everything from daily helpdesk queries to long-term technology planning.',
                'is_feature' => true,
            ],
            [
                'question' => 'What hours is support available?',
                'answer' => 'Standard support runs during UK business hours, with 24/7 monitoring and emergency support available on our Managed IT and Cybersecurity plans.',
                'is_feature' => true,
            ],
            [
                'question' => 'How do you keep our systems secure?',
                'answer' => 'We combine proactive monitoring, regular patching, staff security training, and automated backups to keep your business protected against threats.',
                'is_feature' => true,
            ],
            [
                'question' => 'Do you offer fixed monthly pricing?',
                'answer' => 'Yes, our support plans are available on straightforward monthly pricing, so you always know what your IT support costs without surprise bills.',
                'is_feature' => true,
            ],
            [
                'question' => 'How do I get started with Tech Support Inc?',
                'answer' => "Simply get in touch with us and we'll arrange a free consultation to understand your business needs and recommend the right support plan for you.",
                'is_feature' => false,
            ],
        ];

        foreach ($faqs as $index => $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                [
                    'answer' => $faq['answer'],
                    'sort_order' => $index,
                    'is_feature' => $faq['is_feature'],
                    'is_active' => true,
                ]
            );
        }
    }
}
