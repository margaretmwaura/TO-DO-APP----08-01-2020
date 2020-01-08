@extends('app')
@section('content')

    <table class="table table-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>MESSAGE</th>
            <th>DATE</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $onetodo -> id }}</td>
            <td>{{ $onetodo -> title  }}</td>
            <td>{{ $onetodo -> message }}</td>
            <td>{{$onetodo -> date}}</td>
        </tr>
        </tbody>
    </table>


@endsection
