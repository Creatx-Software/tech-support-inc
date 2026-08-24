@extends('layouts.frontend')

@section('title', 'About Us | Tech Support Inc - IT Support Experts in London')
@section('meta_description', 'Learn about Tech Support Inc, a London IT support and consultancy with over a decade of experience helping UK small businesses with IT infrastructure, cybersecurity, cloud and managed IT services.')
@section('meta_keywords', 'about Tech Support Inc, IT support company London, IT consultancy UK, managed IT services provider')

@section('content')

    @include('frontend.about.hero')
    @include('frontend.about.about')
    @include('frontend.about.testimonials', ['testimonials' => $featuredTestimonials])
    @include('frontend.about.why')
    
@endsection