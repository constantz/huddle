@extends('layouts.app')
@extends('layout')


@section('content')


<table>
<tr>
    <th>Lessen</th>


</tr>
@foreach ($edumats as $edumat)
<tr>
    <td><td><a href="/edumat/{{$edumat->id}}">{{$edumat->name}}</a></td>
    <td><a href="/edumat/{{$edumat->id}}/edit"><i class="far fa-edit"></i></a></td>  
<td>
<form method="POST" action="/edumat/{{$edumat->id}}">
    @method('DELETE')
    @csrf
<button type="submit"><i class="far fa-trash-alt"></i></button> 
</form>
</td>
</tr>
@endforeach
</table>

<a href="/edumat/create">Lesmateriaal toevoegen</a>




 
@endsection   





