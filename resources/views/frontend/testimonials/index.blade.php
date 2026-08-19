@extends('layouts.frontend')

@section('content')

    @include('frontend.testimonials.hero')
    @include('frontend.testimonials.testimonials', ['testimonials' => $testimonials])

@endsection