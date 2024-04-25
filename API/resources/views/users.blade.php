@extends('master')
@section('content')

<h2>Users</h2>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->firstName }}</li>
        <li>{{ $user->lastName }}</li>
    @endforeach
</ul>


@endsection