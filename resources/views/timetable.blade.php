@extends('layouts.app')
@extends('layout')

@section('content')

<br>
<h3>Geplande lessen</h3>
<br>
{{-- <div class="row"> --}}
	@foreach ($timetable as $time)
		{{-- <div class="col-sm-6">
			<div class="card" style="width: 12rem;"> --}}
				<h4>{{ \Carbon\Carbon::parse($time->date)->format('d-m-Y') }}</h4>
				{{ \Carbon\Carbon::parse($time->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($time->end_time)->format('H:i') }}
				<p>	
				<b>{{ $time->subject->name }}</b>
				</p>
				<p>
				@if (Auth::user()->isAdmin == 1)
					
					<a href="/timetable/{{ $time->id }}/edit"><small><button>Wijzig</button></small></a>
					<a href="/timetable/{{ $time->id }}/delete"><small><button><div class="far fa-trash-alt"></div></button></small></a>
				@endif
				</p>
				<br><br>
			{{-- </div>
		</div>	 --}}
	@endforeach
{{-- </div> --}}

@if (Auth::user()->isAdmin == 1)
	
		<a href="/timetable/create"><h4><button>Nieuw</button></h4></a>
	
@endif

@endsection