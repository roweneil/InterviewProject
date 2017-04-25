@extends('master')

@section('title', 'View Messages')

@section('content')

    <a href = "/create">Write Message</a>

    <h1>View All Messages</h1>

    @foreach($messages as $message)

        <hr>

        <h3>{{ $message->name }}</h3>
        <h4>{{ $message->email }}</h4>
        <p>{{ $message->message }}</p>

    @endforeach

@endsection