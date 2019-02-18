
@extends('layouts.app')
@extends('layout')



@section('content')
<div class="title m-b-md">  
Dit is de pagina van {{Auth::user()->name}}
</div>
<table class="table table-striped">
    <thead>
        <tr>
          <th>subject</th>
          <th>passed</th>
        </tr>
</thead>
<tbody>
@foreach($usersSubjects as $usersSubject)
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





@endsection







