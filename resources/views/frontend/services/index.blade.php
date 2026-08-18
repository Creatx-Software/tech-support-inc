@extends('layouts.frontend')

@section('content')

    @include('frontend.services.hero')
    @include('frontend.services.services')
    @include('frontend.services.work')
    @include('frontend.services.cta')

@endsection