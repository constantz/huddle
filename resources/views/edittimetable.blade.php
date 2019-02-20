@extends('layouts.app')
@extends('layout')

@section('content')

<p>
    <h3>Verander dit onderdeel van het rooster</h3>
</p>

<form method="POST" action="/timetable/{{ $timetable->id }}">

    @method('PATCH')
    @csrf

    <div>
        Datum (formaat YYYY-MM-DD):<br>
        <input type="TEXT" name="date" value="{{ $timetable->date }}" required 
        pattern="(20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
        title="date"/>
    </div><br>
    <div>
        Begintijd:<br>
        <input type="TIME" name="start_time" value="{{ $timetable->start_time }}"/>
    </div><br>
    <div>
        Eindtijd:<br>
        <input type="TIME" name="end_time" value="{{ $timetable->end_time }}"/>
    </div><br>
    <div>
        Vak:<br>
        <select name="subject_id" value="{{ $timetable->subject_id }}">
            <option value=1>HTML</option>
            <option value=2>CSS</option>
            <option value=3>JavaScript</option>
            <option value=4>PHP</option>
        </select>
        
    </div>
        <br>
        <input type="SUBMIT" value="Submit">
</form>

@endsection

