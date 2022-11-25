@extends('layouts.app')

@section('content')
    <h1>Animals Show</h1>
    <hr/>

    <div class="bg dark text white rounded p-3">
        <h5 class="text-warning">Name</h5>
        <p class="fw-bold">{{$animal->naam}}</p>

        <h5 class="text-warning">Species</h5>
        <p class="fw-bold">{{$animal->species}}</p>

        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{$animal->description}}</p>
    </div>

@endsection


