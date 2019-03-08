@extends('layouts.app')
@extends('layout')

@section('content')

    <p>
        <h3>Maak een invoer voor het rooster</h3>
    </p>

    <form method="POST" action="/timetable">
        @csrf

        <div>
            Datum (formaat YYYY-MM-DD):<br>
            <input type="TEXT" name="date" placeholder="YYYY-MM-DD" required 
            pattern="(20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
            title="date"/>
        </div><br>
        <div>
            Begintijd:<br>
            <input type="TIME" name="start_time"/>
        </div><br>
        <div>
            Eindtijd:<br>
            <input type="TIME" name="end_time"/>
        </div><br>
        <div>
            Vak:<br>
            <select name="subject_id">
                @foreach($subjects as $subj)
                    <option value={{ $subj->id }}>{{ $subj->name }}</option>
                @endforeach
            </select>
        </div>
            <br>
            <input type="SUBMIT" value="Submit">
    </form>

@endsection

