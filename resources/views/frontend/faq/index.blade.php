@extends('layouts.frontend')

@section('title', 'FAQs | Tech Support Inc - IT Support Questions Answered')
@section('meta_description', 'Frequently asked questions about Tech Support Inc IT support services, managed IT services, cybersecurity, pricing and 24/7 helpdesk support for UK small businesses.')
@section('meta_keywords', 'Tech Support Inc FAQ, IT support questions, managed IT services FAQ UK')

@section('content')

    @include('frontend.faq.hero')
    @include('frontend.faq.faq', ['faqs' => $faqs])

@endsection
