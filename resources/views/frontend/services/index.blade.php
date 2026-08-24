@extends('layouts.frontend')

@section('title', 'Our IT Services | Tech Support Inc - IT Support for UK Small Businesses')
@section('meta_description', 'Explore Tech Support Inc IT services: IT infrastructure, managed IT support, cybersecurity, network management, cloud services, Microsoft 365, data backup and recovery, IT consulting and more.')
@section('meta_keywords', 'IT services UK, managed IT services, cybersecurity services, network security, cloud services, Microsoft 365 support, data backup and recovery, IT consulting, hardware support, virtualization')

@section('content')

    @include('frontend.services.hero')
    @include('frontend.services.services')
    @include('frontend.services.work')
    @include('frontend.services.cta')

@endsection