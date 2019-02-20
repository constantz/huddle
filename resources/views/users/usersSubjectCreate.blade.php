@extends('layouts.app')
@extends('layout')

@section('content')
@foreach($subjects as $subject)
<form method="POST" action="/usersSubject">
    @csrf
    <input type="hidden" name = "user_id" value="{{$id}}">
    <input Type="text"  name = "subjectname" value = "{{$subject->name}}">
    <input Type="hidden"  name = "subject_id" value = "{{$subject->id}}">    
    <button type="submit">save</button>
</form>
    {{-- <label class="checkbox" $for="passed">  
            <input type="checkbox" name="save" onChange="this.form.submit()" {{$subject->passed ? 'checked' : ''}}>      
    </label>  --}}
   @endforeach






  
@endsection