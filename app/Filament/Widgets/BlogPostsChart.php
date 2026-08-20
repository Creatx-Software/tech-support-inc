<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected static string $view = 'filament.widgets.fixed-height-chart-widget';

    protected static ?string $heading = 'Blog Posts (Last 6 Months)';

    protected static ?int $sort = 2;

    protected static ?string $maxHeight = '360px';

    protected int | string | array $columnSpan = 1;

    protected function getOptions(): array
    {
        return [
            'maintainAspectRatio' => false,
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                ],
            ],
        ];
    }

    protected function getData(): array
    {
        $months = collect(range(5, 0))->map(fn (int $i) => now()->subMonths($i));

        $counts = $months->map(
            fn ($month) => Blog::whereYear('created_at', $month->year)
                ->whereMonth('created_at', $month->month)
                ->count()
        );

        return [
            'datasets' => [
                [
                    'label' => 'Blog Posts',
                    'data' => $counts->toArray(),
                    'backgroundColor' => '#f59e0b',
                    'borderColor' => '#f59e0b',
                    'barPercentage' => 0.6,
                    'categoryPercentage' => 0.7,
                ],
            ],
            'labels' => $months->map(fn ($month) => $month->format('M Y'))->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
