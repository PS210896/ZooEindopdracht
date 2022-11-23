@extends('layouts.app')

@section('content')
<h1>Eindopdracht Zoo</h1>
<a class="btn btn-link float-end" href="{{ route('animals.create') }}">Create Animal</a>

<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">Animal ID</th>
            <th scope="col">Animal Name</th>
            <th scope="col">Animal Species</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($animals as $animal)
        <tr>
            <th scope ="row">{{ $loop->iteration }}</th>
            <td>{{$animal->name}}</td>
            <td>{{$animal->species}}</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('animals.show', $animal->id) }}">View</a></li>
                        <li><a class="dropdown-item" href="{{ route('animals.edit', $animal->id) }}">Edit</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route ('animals.destroy', $animal->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
