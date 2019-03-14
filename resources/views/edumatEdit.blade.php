@extends('layouts.app')
@extends('layout')

@section('content')
<img class="pichome" src="img/huddle2.png" width="300" height="600">  
    <form method="POST" action="/edumat/{{$edumat->id}}">
        @method('PATCH')
        @csrf
        <input type="integer" name = "subject_id" value = "{{$edumat->subject_id}}">
        <input type="text" name = "name" value ="{{$edumat->name}}">
        <input Type="longtext"  name = "content" value = "{{$edumat->content}}">
        <button type="submit"><button><div>wijzig</div></button></button>
    </form>
     
@endsection