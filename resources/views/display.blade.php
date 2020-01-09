@extends('app')
@section('content')

    <table class="table table-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>MESSAGE</th>
            <th>DAY</th>
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
            <td>{!! Form::open(['action'=> ['CreateToDoController@destroy'  , $note -> id], 'method' =>'POST']) !!}
                {{Form::submit('DELETE EVENT' , ['class' => 'delete'])}}
                {{Form::hidden('_method' ,'DELETE')}}
                {!! Form::close() !!}
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>


@endsection
