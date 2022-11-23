@extends('layouts.app')

@section('content')

<h1>Animals Update</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('animals.update', $animal->id) }}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="name" class="form-control mb-3" placeholder="Animal Name" value="{{$animal->name}}"/>
    <input type="text" name="species" class="form-control mb-3" placeholder="Animal Species" value="{{$animal->species}}"/>
    <textarea class="form-control mb-3" name="description" rows="4" placeholder="Description">{{$animal->description}}</textarea>
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
