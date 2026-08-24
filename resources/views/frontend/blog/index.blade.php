@extends('layouts.frontend')

@section('title', 'Blog | Tech Support Inc - IT Support News & Insights')
@section('meta_description', 'IT support tips, cybersecurity advice and technology insights from Tech Support Inc, helping UK small businesses stay secure and productive.')
@section('meta_keywords', 'IT support blog, cybersecurity tips UK, managed IT services blog, small business IT advice')

@section('content')

    @include('frontend.blog.hero')
    @include('frontend.blog.blog')

@endsection