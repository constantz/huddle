
@extends('layouts.app')

@section('content')
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
<td>{{$usersSubject->user_id}}</td>
<td>{{$usersSubject->passed}}</td>
</tr>
@endforeach
</tbody>
</table> 

@endsection







