@extends('layouts.app')
@extends('layout')

@section('content')

    <form method="POST" action="/edumat/{{$edumat->id}}">
        @method('PATCH')
        @csrf
        <input type="integer" name = "subject_id" value = "{{$edumat->subject_id}}">
        <input type="text" name = "name" value ="{{$edumat->name}}">
        <input Type="longtext"  name = "content" value = "{{$edumat->content}}">
        <button type="submit">edit</button>
    </form>
     
@endsection