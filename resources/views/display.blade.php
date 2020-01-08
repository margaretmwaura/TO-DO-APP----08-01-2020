@extends('app')
@section('content')

    <table class="table table-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>MESSAGE</th>
            <th>DAY</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($notes as $note)
        <tr>
            <td>{{ $note -> id }}</td>
            <td>{{ $note -> title  }}</td>
            <td>{{ $note -> message }}</td>
            <td>{{ $note -> date}}</td>
            <td><button>DELETE</button></td>
        </tr>
            @endforeach
        </tbody>
    </table>


@endsection
