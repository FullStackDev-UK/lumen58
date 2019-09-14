@extends('index')

@section('content')

    <h1>Profile</h1>

    <p>Username: {{ $user->name }} </p>

    <p><a href="home">Home</a></p>

@endsection