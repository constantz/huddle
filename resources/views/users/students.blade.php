
@extends('layouts.app')
@extends('layout')



@section('content')
<img class="pichome" src="img/huddle2.png" width="300" height="600">  
<?php use \App\Users_subject; ?>

<body>
  <div class="title">  
      Welkom {{Auth::user()->name}}
  </div>
    <table class="table table-striped">
      <thead>
          <tr>
            <th>Subject</th>
            <th>Passed</th>
          </tr>
      </thead>
      <tbody>
        @foreach (Users_subject::where('user_id',Auth::user()->id)->get() as $usersSubject)
          <tr>
            <td>{{$usersSubject->subject->name}}</td>
            <td><label class="checkbox" $for="passed">
                <input type="checkbox" name="passed" disabled {{$usersSubject->passed ? 'checked' : ''}}>
                </label>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table> 
</body>

@endsection







