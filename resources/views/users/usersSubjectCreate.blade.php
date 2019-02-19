@extends('layouts.app')
@extends('layout')

@section('content')
<form method="POST" action="/usersSubject">
    @csrf
    <input type="hidden" name = "user_id" value="{{$id}}">
    <input type="text" name = "subject_id" placeholder="vakid" >
    <button type="submit">save</button>
</form>
@endsection