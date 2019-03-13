@extends('layouts.app')
@extends('layout')

@section('content')
hallo
    @foreach($subjects as $subject)
        <form method="POST" action="/usersSubject">
            @csrf
            <input type="hidden" name = "user_id" value="{{$id}}">
            <input Type="text"  name = "subjectname" value = "{{$subject->name}}">
            <input Type="hidden"  name = "subject_id" value = "{{$subject->id}}">    
            <button type="submit">save</button>
        </form>
    @endforeach
 
@endsection