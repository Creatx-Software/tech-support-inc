@extends('layouts.frontend')

@section('content')

    @include('frontend.faq.hero')
    @include('frontend.faq.faq', ['faqs' => $faqs])

@endsection
