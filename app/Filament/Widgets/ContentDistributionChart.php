<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Testimonial;
use Filament\Widgets\ChartWidget;

class ContentDistributionChart extends ChartWidget
{
    protected static string $view = 'filament.widgets.fixed-height-chart-widget';

    protected static ?string $heading = 'Content Distribution';

    protected static ?int $sort = 3;

    protected static ?string $maxHeight = '360px';

    protected int | string | array $columnSpan = 1;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'data' => [
                        Blog::count(),
                        Service::count(),
                        Testimonial::count(),
                        Gallery::count(),
                        Faq::count(),
                        PricingPlan::count(),
                    ],
                    'backgroundColor' => [
                        '#f59e0b',
                        '#10b981',
                        '#3b82f6',
                        '#8b5cf6',
                        '#ec4899',
                        '#6366f1',
                    ],
                ],
            ],
            'labels' => ['Blogs', 'Services', 'Testimonials', 'Gallery', 'FAQs', 'Pricing Plans'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getOptions(): array
    {
        return [
            'maintainAspectRatio' => false,
            'scales' => [
                'x' => [
                    'display' => false,
                ],
                'y' => [
                    'display' => false,
                ],
            ],
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                ],
            ],
        ];
    }
}
