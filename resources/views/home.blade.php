@extends('layouts.app')
@extends('layout')

@section('content')
<div class="container">
        @if(\Session::has('error'))
        <div class="alert alert-danger">
        {{\Session::get('error')}}
        </div>
        @endif
        <div class=”row”>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                        <?php if(auth()->user()->isAdmin == 1): ?>
                            <div class=”panel-body”>
                                <a href="{{url('/admin')}}">Teacher</a>
                            </div>
                            <div class=”panel-body”>
                                <a href="{{url('/subjects')}}">Vakken</a>
                            </div>
                        <?php else: ?>
                        <div class=”panel-body”>
                            <a href="{{url('/usersSubject')}}">Student</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div> 
        </div>    
</div>
@endsection