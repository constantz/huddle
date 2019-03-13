@extends('layouts.app')
@extends('layout')


@section('content')
    <?php use \App\Edumat; ?>

    <table class="table table-striped">
     <thead>   
        <tr>
            <th>Lessen</th>
        </tr>
    </thead>
    <tbody>
    @foreach (Edumat::where('subject_id',$subject->id)->get() as $edumat)
        <tr>
            <td><a type="button" class="btn1 black" href="/edumat/{{ $edumat->id }}">{{ $edumat->name }}</a></td>
            @if (Auth::user()->isAdmin == 1)  
            <td><a href="/edumat/{{$edumat->id}}/edit"><button class="btn"><div>wijzig</div></button></a></td>  
            <td>
                <form method="POST" action="/edumat/{{$edumat->id}}">
                    @method('DELETE')
                    @csrf
                <button class="btn" type="submit"><i class="far fa-trash-alt"></i></button> 
                </form>
            </td>
            @endif
        </tr>
    @endforeach
</tbody>
    </table>

        @if (Auth::user()->isAdmin == 1)
            <a href="/edumat/create"><button class="btn">
                Lesmateriaal toevoegen</button></a>
        @endif
        
@endsection   





