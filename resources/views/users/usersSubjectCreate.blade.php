@extends('layouts.app')
@extends('layout')

@section('content')
<form method="POST" action="/usersSubject">
    @csrf
    <input type="text" name = "user_id" placeholder="studentid">
    <input type="text" name = "subject_id" placeholder="vakid">
    <button type="submit">save</button>
</form>
@endsection