@extends('layouts.app')

@section('content')

<h1>Animal Create</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$errors}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('animals.store') }}" method="POST">
    @csrf
    <input type="text" name="naam" class="form-control mb-3" placeholder="Animal Name"/>
    <input type="text" name="species" class="form-control mb-3" placeholder="Animal Species"/>
    <textarea class="form-control mb-3" name="description" rows="4" placeholder="Description"></textarea>
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>
@endsection
