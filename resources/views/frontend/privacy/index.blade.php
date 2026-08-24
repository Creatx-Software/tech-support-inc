@extends('layouts.frontend')

@section('title', 'Privacy Policy | Tech Support Inc')
@section('meta_description', 'Read the privacy policy for Tech Support Inc, explaining how we collect, use and protect your data.')
@section('meta_robots', 'noindex, follow')

@section('content')

    @include('frontend.privacy.hero')
    @include('frontend.privacy.privacy')

@endsection
