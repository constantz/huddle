@extends('layouts.app')
@extends('layout')

@section('content')
<img class="pichome" src="img/huddle2.png" width="300" height="600">  
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Vakken</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($subjects as $subject)
        
            <tr>
                <td><a type="button" class="btn1 black" href="/subjects/{{$subject->id}}">{{$subject->name}}</a></td>
                @if (Auth::user()->isAdmin == 1)
                <td>
                <a href="/subjects/{{$subject->id}}/edit"><button class="btn">wijzig</button></a>
                </td>
                <td>
                    <form method="POST" action="/subjects/{{$subject->id}}">
                        @method('delete')
                        @csrf
                        <button class="btn" type="submit"><small><div class="far fa-trash-alt"></div></small></button>
                    </form>
                </td>
                @endif
            </tr>
        
        @endforeach
        </tbody>
    </table>

    @if (Auth::user()->isAdmin == 1)
    <br>	
    <a href="/subjects/create"><h4><small><button class="btn">Nieuw vak</button></small></h4></a>
    @endif	

@endsection
