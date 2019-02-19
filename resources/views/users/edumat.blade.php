@extends('layouts.app')
@extends('layout')


@section('content')

<h2>Hallo</h2>
<table>
<tr>
    <th>Lessen</th>

</tr>
@foreach ($edumats as $edumat)
<tr>
    <td><a href="{{$edumat->description}}">{{$edumat->description}}</a></td>
</tr>


@endforeach
</table>
@endsection





