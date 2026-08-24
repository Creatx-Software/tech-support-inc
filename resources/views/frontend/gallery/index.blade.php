@extends('layouts.frontend')

@section('title', 'Gallery | Tech Support Inc - IT Support in Action')
@section('meta_description', 'See Tech Support Inc in action: our team delivering IT support, network management and managed IT services to UK small businesses.')
@section('meta_keywords', 'Tech Support Inc gallery, IT support team London, IT services photos')

@section('content')

    @include('frontend.gallery.hero')
    @include('frontend.gallery.gallery')

@endsection