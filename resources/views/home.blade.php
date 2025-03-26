@extends('layouts.index')

@section('title', 'Home')

@section('content')
    @include('components.comp-home.banner')
    @include('components.comp-home.about')
    @include('components.comp-home.service')
    @include('components.comp-home.testimony')
    @include('components.comp-home.transformation')
    @include('components.comp-home.faq')
    @include('components.comp-home.schedule')
@endsection