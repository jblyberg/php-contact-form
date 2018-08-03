@extends('layouts.primary')

@section('content')

    <!-- Intro Header -->
    @include('sections.intro_header_section')

    <!-- About Section -->
    @include('sections.about_section')

    <!-- Coffee Section -->
    @include('sections.coffee_section')

    <!-- Contact Section -->
    @include('sections.contact_form_section')

    <!-- Map Section -->
    @include('sections.map_section')

@stop