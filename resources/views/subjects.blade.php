@extends('layouts.app')
@extends('layout')

@section('content')

<br>
<table>
    <tr>
        <th>Vakken</th>
    </tr>

@foreach ($subjects as $subject)
    <tr>
        <td><td><td><a href="/subjects/{{$subject->id}}">{{$subject->name}}</a></td>
        <td>
           <a href="/subjects/{{$subject->id}}/edit"><button><div>Wijzig</div></button></a>
        </td>
        <td>
            <form method="POST" action="/subjects/{{$subject->id}}">
                @method('delete')
                @csrf
                <button type="submit"><small><div class="far fa-trash-alt"></div></small></button>
            </form>
        </td>
    </tr>
   
@endforeach
</table>
<br>	
<a href="/subjects/create"><h4><small><button>Nieuw vak</button></small></h4></a>
	


@endsection
