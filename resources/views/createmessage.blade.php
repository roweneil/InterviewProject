@extends('master')

@section('title', 'New Message')

@section('content')

    <a href = "/view">View Messages</a>

    <h1>New Message</h1>

    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    <form method = "post">
        {{ csrf_field() }}
        <div>
            <label for = "name">Name</label>
            <input type = "text" name = "name" id = "name">
        </div>
        <div>
            <label for = "email">Email</label>
            <input type = "email" name = "email" id = "email">
        </div>
        <div>
            <label for = "message">Message</label>
            <textarea name = "message" id = "message"></textarea>
        </div>
        <div>
            <input type = "submit">
        </div>
    </form>

@endsection