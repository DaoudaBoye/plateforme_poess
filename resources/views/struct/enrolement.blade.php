
{{-- FORMULAIRE D'ENRÔLEMENT OPTIMISÉ --}}
@extends('layouts.template-plateforme.template')

@section('title', 'Enrôlement')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/enrolement/form.css') }}">

@endpush

@section('content')
<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Enrôlement</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('struct.dashboard') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Enrôlement</li>
                </ol>
            </div>
        </div>
        <hr class="border-primary">
    </div>
</div>

<!-- Main content -->
<div class="container-fluid">
        @include('struct.partials.section-form')
</div>
@endsection
@push('scripts')
<script src="{{ asset('assets/js/enrolement/form.js') }}" defer></script>
@endpush

