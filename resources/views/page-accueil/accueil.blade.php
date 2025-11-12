@extends('layouts.template-accueil.accueil_template')

@section('title', 'Accueil')

@section('content')
<main class="main">
    {{-- ========================================
             SECTION HERO CAROUSEL
        ======================================== --}}
    @include('page-accueil.partials.hero-carousel')

    {{-- ========================================
             SECTION ARTICLES & ACTUALITÉS
        ======================================== --}}
    @include('page-accueil.partials.contents-section')

    {{-- ========================================
             SECTION CONTACT
        ======================================== --}}
    @include('page-accueil.partials.contact-section')
</main>

{{-- Register Modal --}}
@include('auth.register')
@include('auth.login')

@endsection

{{-- ========================================
         STYLES
    ======================================== --}}
@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @include('page-accueil.partials.styles.custom-styles')
@endpush

{{-- ========================================
         SCRIPTS
    ======================================== --}}
@push('scripts')
@include('page-accueil.partials.scripts.auth-scripts')
@endpush