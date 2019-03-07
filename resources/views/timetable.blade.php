@extends('layouts.app')
@extends('layout')

@section('content')

<br>
<h3>Geplande lessen</h3>
<br>
<table>
	<tr>
		<td>
			<button>terug</button>
		</td>
		@foreach ($timetable as $time)
			<td>
				<div class="card" style="width:150px; height:200px;">
					<div class="card-title">
						@if( \Carbon\Carbon::parse($time->date)->format('Y-d-m') === \Carbon\Carbon::today()->format('Y-d-m'))
							{{ \Carbon\Carbon::parse($time->date)->format('Y') }}
							<h4 style="color:red;">{{ \Carbon\Carbon::parse($time->date)->format('d M') }}</h4>
							<p style="color:red;">
								{{ \Carbon\Carbon::parse($time->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($time->end_time)->format('H:i') }}
							</p>
						@else	
							{{ \Carbon\Carbon::parse($time->date)->format('Y') }}
							<h4>{{ \Carbon\Carbon::parse($time->date)->format('d M') }}</h4>
							<p>
								{{ \Carbon\Carbon::parse($time->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($time->end_time)->format('H:i') }}
							</p>
						@endif	
					</div>		
					<div >	
						<b>{{ $time->subject->name }}</b>
					</div>
				</div>
				@if (Auth::user()->isAdmin == 1)
					<table>
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
					</table>	
				@endif
			</td>
		@endforeach
		<td>
			<button>vooruit</button>
		</td>
	<tr>
</table>
<br><br>
@if (Auth::user()->isAdmin == 1)
	<a href="/timetable/create"><h4><button>Nieuw</button></h4></a>
@endif
@endsection