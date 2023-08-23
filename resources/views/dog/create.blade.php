@extends('layouts.app')

@section('title', 'Add a new dog')

@section('content')

    <form method="post" action="/dogs">
        @csrf
        <div class="mb-3">
            <label for="dogName" class="form-label">Dog Name</label>
            <input name="name" type="text" class="form-control" id="dogName" aria-describedby="dogNameHelp">
            <div id="dogNameHelp" class="form-text">Please input the name of the dog.</div>
        </div>
        <div class="mb-3">
            <label for="breed" class="form-label">Breed</label>
            <input name="breed" type="text" class="form-control" id="breed">
            <div id="breed" class="form-text">Please input the breed of the dog.</div>
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input name="height" type="text" class="form-control" id="height">
            <div id="breed" class="form-text">Please input the height of the dog.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
