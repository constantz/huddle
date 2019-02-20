@extends('layouts.app')
@extends('layout')

@section('content')
<br>
<h3>Geplande lessen</h3>
<br>
@foreach ($timetable as $time) 
	<h4>{{ \Carbon\Carbon::parse($time->date)->format('d-m-Y') }}</h4>
	<p>{{ \Carbon\Carbon::parse($time->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($time->end_time)->format('H:i') }}</p>
	<p><b>{{ $time->subject->name }}</b></p><br>
	
@endforeach

Hier komt een edit knop
@endsection