<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\BlogResource;
use App\Filament\Resources\ContactResource;
use App\Filament\Resources\FaqResource;
use App\Filament\Resources\GalleryResource;
use App\Filament\Resources\ServiceResource;
use App\Filament\Resources\TestimonialResource;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Testimonial;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $unreadMessages = Contact::where('is_read', false)->count();

        return [
            Stat::make('Blog Posts', Blog::count())
                ->description(Blog::where('is_active', true)->count() . ' published')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('primary')
                ->url(BlogResource::getUrl('index')),

            Stat::make('Unread Messages', $unreadMessages)
                ->description($unreadMessages > 0 ? 'Needs attention' : 'All caught up')
                ->descriptionIcon($unreadMessages > 0 ? 'heroicon-m-exclamation-circle' : 'heroicon-m-check-circle')
                ->color($unreadMessages > 0 ? 'danger' : 'success')
                ->url(ContactResource::getUrl('index')),

            Stat::make('Active Services', Service::where('is_active', true)->count())
                ->description(Service::count() . ' total')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('success')
                ->url(ServiceResource::getUrl('index')),

            Stat::make('Testimonials', Testimonial::where('is_active', true)->count())
                ->description('Published reviews')
                ->descriptionIcon('heroicon-m-star')
                ->color('warning')
                ->url(TestimonialResource::getUrl('index')),

            Stat::make('Gallery Items', Gallery::count())
                ->description('Total images')
                ->descriptionIcon('heroicon-m-photo')
                ->color('info')
                ->url(GalleryResource::getUrl('index')),

            Stat::make('FAQs', Faq::where('is_active', true)->count())
                ->description('Published FAQs')
                ->descriptionIcon('heroicon-m-question-mark-circle')
                ->color('gray')
                ->url(FaqResource::getUrl('index')),
        ];
    }
}
