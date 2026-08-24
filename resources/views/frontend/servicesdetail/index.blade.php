@extends('layouts.frontend')

@section('title', ($service->meta_title ?: $service->title) . ' | Tech Support Inc')
@section('meta_description', $service->meta_description ?: $service->short_description)
@section('meta_keywords', $service->meta_keywords ?: 'IT support London, ' . $service->title . ', managed IT services UK')
@section('og_title', $service->meta_title ?: $service->title)
@section('og_description', $service->meta_description ?: $service->short_description)
@section('og_image', $service->image_url)

@section('content')

    @include('frontend.servicesdetail.hero')
    @include('frontend.servicesdetail.servicesdetail')
    @include('frontend.servicesdetail.cta')

@endsection
