@extends('layouts.app')

@section('content')
    <div class="row pb-3">
        <div class="col-8">
            <h2>We have following dogs.</h2>
        </div>
        <div class="col-4">
            <a href="/dog/create" class="btn btn-success">+ Add Dog</a>
        </div>
    </div>

    <ol class="list-group list-group-numbered">
    @foreach ($dogs as $dog)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">{{ $dog['name'] }}</div>
            Height: {{ $dog['height'] }}
            </div>
            <span class="badge bg-primary rounded-pill">{{ $dog['breed'] }}</span>
        </li>
    @endforeach
    </ol>
@endsection
