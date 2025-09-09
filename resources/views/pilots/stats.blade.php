@extends('layouts.app')

@section('title', 'Pilots List')

@section('content')
<div class="container">
    <h5>Count Tokio pilots</h5>
    <p>{{ $viewData['pilotsCountTokio'] }}</p>
    <h5>Count LA pilots</h5>
    <p>{{ $viewData['pilotsCountLA'] }}</p>
    <h5>Nitro average</h5>
    <p>{{ $viewData['nitroAverage'] }}</p>
</div>
@endsection