@extends('layouts.app')
@extends('layout')

@section('content')

    <form method="POST" action="/edumat">
        @csrf
        <select name="subject_id">
            @foreach($subjects as $subj)
                <option value={{ $subj->id }}>{{ $subj->name }}</option>
            @endforeach
        </select>
        <input type="text" name = "name" placeholder="naam" required>
        <input Type="longtext"  name = "content" placeholder = "inhoud" required>
        <button type="submit">save</button>
    </form>
     
@endsection
