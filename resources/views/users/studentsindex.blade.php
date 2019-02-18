@extends('layouts.app')
@extends('layout')

@section('content')
    <h1 class="title">Students</h1>

    <table>
            <tr>
                <th>Naam</th>
                <th>HTML</th>
                <th>CSS</th>
                <th>JavaScript</th>
                <th>PHP</th>
            </tr>
        @foreach($usersSubjects as $usersSubject)
            <tr>
                <td>
                    {{$usersSubject->user->name}}
                </td>
                <td>
                    {{$usersSubject->subject->name}}</td>
                    <td>
                        <form  method="POST" action="/userSubject/{{$usersSubject->id}}" >
                                @method('PATCH')
                                @csrf

                                <label class="checkbox" $for="passed">  
                                    <input type="checkbox" name="passed" {{$usersSubject->passed ? 'checked' : ''}}>      
                                </label> 
                                <button type="submit">edit</button>
                        </form>
                    </td>
            </tr>
        @endforeach

    </table>
@endsection
  