@extends('layouts.app')
@extends('layout')

@section('content')

<h2>Maak hier een nieuw vak aan</h2>

<form method="POST" action="/subjects">
    @csrf
    
    <div>
        Vak:<br>

        <input type="text" name="name" placeholder="Naam van het vak" required>
    </div>
        <br>
        <input type="SUBMIT" value="Submit">
</form>

@endsection