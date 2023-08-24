@extends('layouts.app')

@section('title', 'Add a new dog')

@section('content')

    <form method="post" action="/dogs" class="needs-validation @if (count($errors)) was-validated @endif" novalidate>
        @csrf
        <div class="mb-3">
            <label for="dogName" class="form-label">Dog Name</label>
            <input name="name" value="{{ old('name') }}" required type="text" class="form-control" id="dogName" aria-describedby="dogNameHelp">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <!-- <div id="dogNameHelp" class="form-text">Please input the name of the dog.</div> -->
        </div>
        <div class="mb-3">
            <label for="breed" class="form-label">Breed</label>
            <input name="breed" value="{{ old('breed') }}" required type="text" class="form-control" id="breed">
            @error('breed')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <!-- <div id="breed" class="form-text">Please input the breed of the dog.</div> -->
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input name="height" value="{{ old('height') }}" required type="number" class="form-control @error('height') is-invalid @enderror" id="height">
            @error('height')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <!-- <div id="breed" class="form-text">Please input the height of the dog.</div> -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
