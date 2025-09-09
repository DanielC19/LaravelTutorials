@extends('layouts.app')

@section('title', 'Pilots List')

@section('content')

@if($errors->any())
    <ul id="errors" class="alert alert-danger list-unstyled">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('pilots.save') }}" method="POST" class="d-flex flex-column gap-4">
    @csrf
    <input type="text" name="name" placeholder="Pilot Name" value="{{ old('name') }}" required>
    <select name="city" required>
        <option value="LA" {{ old('city') === 'LA' ? 'selected' : '' }}>Los Angeles</option>
        <option value="Tokio" {{ old('city') === 'Tokio' ? 'selected' : '' }}>Tokio</option>
    </select>
    <input type="number" name="nitro" placeholder="Nitro" value="{{ old('nitro') }}" required>
    <button type="submit" class="btn btn-primary">Create Pilot</button>
</form>

@endsection