@extends('layouts.app')
@extends('layout')

@section('content')

<form method="POST" action="/edumat">
    @csrf
    <input type="integer" name = "subject_id" placeholder="vakid">
    <input type="text" name = "name" placeholder="naam">
    <input Type="longtext"  name = "content" placeholder = "inhoud">
    <button type="submit">save</button>
</form>
     
@endsection