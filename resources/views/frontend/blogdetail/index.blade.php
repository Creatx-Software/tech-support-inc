@extends('layouts.frontend')

@section('title', ($blog->meta_title ?: $blog->title) . ' | Tech Support Inc Blog')
@section('meta_description', $blog->meta_description ?: Str::limit(strip_tags($blog->description), 160))
@section('meta_keywords', $blog->meta_keywords ?: 'IT support blog, ' . $blog->title)
@section('og_title', $blog->meta_title ?: $blog->title)
@section('og_description', $blog->meta_description ?: Str::limit(strip_tags($blog->description), 160))
@section('og_type', 'article')
@section('og_image', $blog->image_url)

@section('content')

    @include('frontend.blogdetail.hero')
    @include('frontend.blogdetail.blogdetail')

@endsection