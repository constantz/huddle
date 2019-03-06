@extends('layouts.app')
@extends('layout')

@section('content')

<br>
<h3>Geplande lessen</h3>
<br>
	@foreach ($timetable as $time)
		<h4>{{ \Carbon\Carbon::parse($time->date)->format('d-m-Y') }}</h4>
		{{ \Carbon\Carbon::parse($time->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($time->end_time)->format('H:i') }}
		<p>	
			<b>{{ $time->subject->name }}</b>
		</p>
	
		@if (Auth::user()->isAdmin == 1)
			<table>
			<p>
			<tr>
				<td>	
					<a href="/timetable/{{ $time->id }}/edit"><button>Wijzig</button></a>
				</td>
				<td>
					<form method="POST" action="/timetable/{{ $time->id }}">
						@method('delete')
						@csrf
						<button type="submit"><small><div class="far fa-trash-alt"></div></small></button>
					</form>
				</td>
			</tr>
			</p>
			</table>	
		@endif
		<br><br>
	@endforeach
@if (Auth::user()->isAdmin == 1)
	<a href="/timetable/create"><h4><button>Nieuw</button></h4></a>
@endif

@endsection