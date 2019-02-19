@extends('layouts.app')
@extends('layout')

@section('content')

@foreach ($timetables as $time) 
          <h3>{{ $time->date }}</h3>
          <p>{{ $time->start_time }} - {{ $time->end_time }}</p>
		  
		  <p>{{ $time->subject_id }}</p>
@endforeach


@endsection