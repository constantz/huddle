@extends('layouts.app')
@extends('layout')


@section('content')
<h1> {{$edumat->name}}</h1>


{{$edumat->content}}
<a href="/edumat/{{$edumat->id}}/edit"><i class="far fa-edit"></i></a></td> 
    <table>
        
        @foreach ($edumat->datalinks as $datalink)
            <tr>
                   
                <td> <a href=" {{asset("storage/$datalink->datalinks")}}"> {{$datalink->datalinks}}</a> <td>
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
                <button type="submit">add file</button>
                <input type="integer" name = "edumat_id" value="{{ $edumat->id }}" hidden>
                <input type="file" name = "datalinks" placeholder="filename">
                
            </form> 


    <table>
        @foreach ($edumat->internetlinks as $internetlink)
            <tr>

                <td><a href="{{$internetlink->url}}"target="_blank">{{$internetlink->url}}</a><td>
                        <form method="POST" action="/internetlink/{{$internetlink->id}}">
                            @method('DELETE')
                            @csrf
                        <button type="submit"><i class="far fa-trash-alt"></i></button> 
                        </form>
            </tr>   
        @endforeach
    </table>

        <form method="POST" action="/internetlink">
            @csrf
            <button type="submit">add link</button>
            <input type="integer" name = "edumat_id" value="{{ $edumat->id }}" hidden>
            <input type="text" name = "url" placeholder="url">
            
        </form> 

@endsection   

