@extends('layouts.app')
@extends('layout')


@section('content')
    

<div class="container">
    <div class="row">

<div class="col-6">
    <h1> {{$edumat->name}}</h1>
    <div class="table table-striped">
    {{$edumat->content}}
    </div>
    @if (Auth::user()->isAdmin == 1)
        <a type="button" class="btn" href="/edumat/{{$edumat->id}}/edit">Wijzigen</a></td>
    @endif
</div>

<div class="col-4">
    <div class="float">
        <table class="table table-striped">
        
            @foreach ($edumat->datalinks as $datalink)
                <tr>                   
                    <td><button class="btn1"><a class="black" href=" {{asset("storage/$datalink->datalinks")}}"> {{$datalink->datalinks}}</a> <td>
                        @if (Auth::user()->isAdmin == 1)
                        </button><td>    
                        <form method="POST" action="/datalinks/{{$datalink->id}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn"><i class="far fa-trash-alt"></i></button> 
                        </form> 
                    </td>
                        @endif                
                    </tr>    
            @endforeach 
        </table>
            @if (Auth::user()->isAdmin == 1)
                <form method="POST" action="/datalinks">
                    @csrf
                    <button type="submit" class="btn">add file</button>
                    <input type="integer" name = "edumat_id" value="{{ $edumat->id }}" hidden>
                    <input type="file" name = "datalinks" placeholder="filename" required>
                    
                </form> 
            @endif


        <table class="table table-striped">
            @foreach ($edumat->internetlinks as $internetlink)
                <tr>
                    <td><a type= "button" class="btn1 black" href="{{$internetlink->url}}"target="_blank">{{$internetlink->url}}</a><td>
                        @if (Auth::user()->isAdmin == 1)
                    <td>     
                        <form method="POST" action="/internetlink/{{$internetlink->id}}">
                            @method('DELETE')
                            @csrf
                        <button class="btn" type="submit"><i class="far fa-trash-alt"></i></button> 
                        </form>
                    </td>
                    @endif
                </tr>   
            @endforeach
        </table>

        @if (Auth::user()->isAdmin == 1)
            <form method="POST" action="/internetlink">
                @csrf
            
                <input type="integer" name = "edumat_id" value="{{ $edumat->id }}" hidden>
                <input class="table table-striped" type="text" name = "url" placeholder="url" required>   
                <button class="btn" type="submit">add link</button>
            </form> 
        @endif
    
@endsection   
</div>
</div>
</div>