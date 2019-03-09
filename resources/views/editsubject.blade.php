@extends('layouts.app')
@extends('layout')

@section('content')
    <h2>Wijzig hier het vak</h2>

    <form method="POST" action="/subjects/{{$subjects->id}}">
        @method('PATCH')
        @csrf
        
        <div>
            Vak:<br>

            <input type="text" name="name" value="{{ $subjects->name }}" required>
        </div>
            <br>
            <input type="SUBMIT" value="Submit">
    </form>

@endsection