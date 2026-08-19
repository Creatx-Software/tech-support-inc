@extends('layouts.frontend')

@section('content')

    @include('frontend.about.hero')
    @include('frontend.about.about')
    @include('frontend.about.testimonials', ['testimonials' => $featuredTestimonials])
    @include('frontend.about.why')
    
@endsection