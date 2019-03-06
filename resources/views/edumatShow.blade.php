@extends('layouts.app')
@extends('layout')


@section('content')
<h1> {{$edumat->name}}</h1>


{{$edumat->content}}

<a href="{{ asset('storage/javascript1.pptx')}}">tekst</a>


<table>
@foreach ($edumat->datalinks as $datalink)
<tr>

    <td><a href="{{$datalink->url}}"target="_blank">{{$datalink->url}}</a><td>
            <form method="POST" action="/datalinks/{{$datalink->id}}">
                @method('DELETE')
                @csrf
            <button type="submit"><i class="far fa-trash-alt"></i></button> 
            </form>
</tr>   
@endforeach
</table>
<form method="POST" action="/datalinks">
    @csrf
    <input type="integer" name = "edumat_id" value="{{ $edumat->id }}" hidden>
    <input type="text" name = "url" placeholder="url">
    <button type="submit">add link</button>
</form>

@endsection   

