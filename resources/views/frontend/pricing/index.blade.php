@extends('layouts.frontend')

@section('title', 'Pricing Plans | Tech Support Inc - IT Support Packages for UK Businesses')
@section('meta_description', 'Compare Tech Support Inc pricing plans for managed IT services, IT support and 24/7 helpdesk cover, tailored for UK small businesses.')
@section('meta_keywords', 'IT support pricing, managed IT services cost, IT support packages UK, IT support plans')

@section('content')

    @include('frontend.pricing.hero')
    @include('frontend.pricing.pricing')

@endsection