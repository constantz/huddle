@extends('layouts.app')
@extends('layout')


@section('content')
    <?php use \App\Edumat; ?>

    <table>
    <tr>
        <th>Lessen</th>
    </tr>

    @foreach (Edumat::where('subject_id',$subject->id)->get() as $edumat)
        <tr>
            <td><a href="/edumat/{{$edumat->id}}">{{$edumat->name}}</a></td>

            @if (Auth::user()->isAdmin == 1)  
            <td><a href="/edumat/{{$edumat->id}}/edit"><button><div>wijzig</div></button></a></td>  
            <td>
                <form method="POST" action="/edumat/{{$edumat->id}}">
                    @method('DELETE')
                    @csrf
                <button type="submit"><i class="far fa-trash-alt"></i></button> 
                </form>
            </td>
            @endif
        </tr>
    @endforeach
    </table>

        @if (Auth::user()->isAdmin == 1)
            <a href="/edumat/create">Lesmateriaal toevoegen</a>
        @endif
        
@endsection   





