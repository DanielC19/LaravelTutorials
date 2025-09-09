@extends('layouts.app')

@section('title', 'Pilots List')

@section('content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">
    @foreach ($viewData['pilots'] as $pilot)
        <div class="d-flex flex-column gap-0 border p-3 mb-3">
            <p>ID: {{ $pilot->getId() }}</p>
            @if ($pilot->getCity() === 'Tokio')
                <p>Name: {{ $pilot->getName() }} - Reto Tokio</p>
            @else
                <p class="text-primary">Name: {{ $pilot->getName() }}</p>
            @endif
            <p>City: {{ $pilot->getCity() }}</p>
            <p>Nitro: {{ $pilot->getNitro() }}</p>
        </div>
    @endforeach
</div>

@endsection