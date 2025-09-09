@extends('layouts.app')

@section('title', 'Home Page - Online Store')

@section('content')
<div class="container text-center">
    <a href="{{ route('pilots.index') }}" class="btn btn-primary">List Pilots</a>
    <a href="{{ route('pilots.create') }}" class="btn btn-secondary">Create Pilot</a>
    <a href="{{ route('pilots.stats') }}" class="btn btn-primary">Pilots Stats</a>
</div>
@endsection