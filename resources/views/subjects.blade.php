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
        <td>{{$subject->name}}</td>
        <td>
           <a href="/subjects/{{$subject->id}}/edit"><button><small><div>Wijzig</div></small></button></a>
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




	
<a href="/subjects/create"><h4><button>Nieuw</button></h4></a>
	


@endsection
