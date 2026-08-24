@extends('layouts.frontend')

@section('title', 'Client Testimonials | Tech Support Inc - IT Support Reviews')
@section('meta_description', 'Read what UK small businesses say about Tech Support Inc IT support, managed IT services and 24/7 helpdesk support.')
@section('meta_keywords', 'Tech Support Inc reviews, IT support testimonials, managed IT services reviews UK')

@section('content')

    @include('frontend.testimonials.hero')
    @include('frontend.testimonials.testimonials', ['testimonials' => $testimonials])

@endsection