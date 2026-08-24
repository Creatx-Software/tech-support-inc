@extends('layouts.frontend')

@section('title', 'Terms & Conditions | Tech Support Inc')
@section('meta_description', 'Read the terms and conditions for using Tech Support Inc IT support and managed IT services.')
@section('meta_robots', 'noindex, follow')

@section('content')

    @include('frontend.terms.hero')
    @include('frontend.terms.terms')

@endsection
