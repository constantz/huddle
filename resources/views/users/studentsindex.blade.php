@extends('layouts.app')
@extends('layout')

@section('content')
<?php use \App\Users_subject; ?>
    <h1 class="title">Students</h1>

<table>
            <tr>
                <th>Naam</th>
                <th>vakken</th>   
            </tr>
          
         @foreach($user as $user)
            <tr>
                <td>
                        @if ($user->isAdmin != 1)
                    {{$user->name}}
                       
                </td>
                
                        @foreach (Users_subject::where('user_id',$user->id)->get() as $usersSubject)
                        <td>{{$usersSubject->subject->name}}</td>
                <td>
                        <form  
                        method="POST" action="/usersSubject/{{$usersSubject->id}}" >
                                @method('PATCH')
                                @csrf

                                <label class="checkbox" $for="passed">  
                                    <input type="checkbox" name="passed" onChange="this.form.submit()" {{$usersSubject->passed ? 'checked' : ''}}>      
                                </label> 
                        </form> 
                </td>   
                <td>
                        </form>
                        <form method="POST" action="/usersSubject/{{$usersSubject->id}}">
                            @method('DELETE')
                            @csrf
                        <button type="submit"><i class="far fa-trash-alt"></i></button> 
                        </form>
                        </td>
                        @endforeach
                    <td><a href="/usersSubject/{{$user->id}}/edit">Vak toevoegen</a></td>  
                    {{-- <td><a href="{{url('/usdelete')}}">Vak verwijderen</a></td>  --}}
                    @endif
                
            </tr>
        @endforeach
</table>


@endsection
