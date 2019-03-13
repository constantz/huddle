@extends('layouts.app')
@extends('layout')

@section('content')

<?php use \App\Users_subject; ?>

<?php if(auth()->user()->isAdmin == 1): ?>

        <h2 class="title">Voortgang studenten</h2>

    <table class="table-responsive table-striped ">
        <thead>
                <tr >
                    <th class="trr">Naam</th>
                    <th class="trr">Vakken</th>   
                    <th class="trr"> </th>
                    <th class="trr"> </th>
                    <th class="trr"> </th>
                </tr>
        </thead>
            @foreach($user as $user)
        <tbody>
                <tr>
                    <td class="trr">
                        @if ($user->isAdmin != 1)
                            {{$user->name}} {{$user->preposition}} {{$user->lastname}}
                    </td>
                    
                            @foreach (Users_subject::where('user_id',$user->id)->get() as $usersSubject)
                    <td class="trr">
                        {{$usersSubject->subject->name}}
                    </td>
                    
                            <form  
                            method="POST" action="/usersSubject/{{$usersSubject->id}}" >
                                    @method('PATCH')
                                    @csrf
                    
                    <td class="trr">
                                    <label class="checkbox" $for="passed">  
                                        <input type="checkbox" name="passed" onChange="this.form.submit()" {{$usersSubject->passed ? 'checked' : ''}}>    
                                    </label>
                            </form> 
                    </td>
                    <td class="trr">
                            </form>
                            <form method="POST" action="/usersSubject/{{$usersSubject->id}}">
                                @method('DELETE')
                                @csrf
                            <button class="btn" type="submit"><i class="far fa-trash-alt"></i></button> 
                            </form>
                    </td>
                            @endforeach
                    <td class="trr">
                        <button class="btn1"><a class="black" href="/usersSubject/{{$user->id}}/edit">Vak toevoegen</a></button>
                    </td>  
                        @endif
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <?php else: ?>
    Deze pagina is alleen toegankelijk voor docenten
    <?php endif; ?>
    
@endsection
