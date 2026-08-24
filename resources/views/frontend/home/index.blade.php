@extends('layouts.frontend')

@section('title', 'Tech Support Inc | IT Support & Managed IT Services for UK Small Businesses in London')
@section('meta_description', 'Tech Support Inc is a London-based IT support company with over a decade of experience, helping UK small businesses stay secure and productive with managed IT services, cybersecurity, cloud, Microsoft 365 and 24/7 helpdesk support.')
@section('meta_keywords', 'IT support London, managed IT services UK, IT support for small business, cybersecurity services, cloud services, Microsoft 365 support, IT consultancy London, network management, 24/7 IT helpdesk')

@section('content')

    @include('frontend.home.hero')
    @include('frontend.home.about')
    @include('frontend.home.services')
    @include('frontend.home.testimonials', ['testimonials' => $featuredTestimonials])
    @include('frontend.home.why')
    @include('frontend.home.gallery')
    @include('frontend.home.banner')
    @include('frontend.home.pricing')
    @include('frontend.home.faq', ['featuredFaqs' => $featuredFaqs])
    @include('frontend.home.video')
    @include('frontend.home.blog')
    @include('frontend.home.temp')
    
@endsection