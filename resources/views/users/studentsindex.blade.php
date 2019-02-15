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
                    {{$usersSubject->subject->name}}
                    <label class="checkbox" $for="passed"> 
                        <input type="checkbox" name="passed" {{$usersSubject->passed ? 'checked' : ''}}>

                    </label>
                </td>
                <td>
                    
                    
                </td>
            </tr>
        @endforeach
    </table> 

    









@endsection