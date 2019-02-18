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
        @foreach($students as $student)
            <tr>
                <td>
                <a href="/progress/{{ $student->id }}">{{ $student->name }}</a>
                </td>
            <form action="">
                <td>
                    <input type="checkbox" name="html">
                </td>
                <td>
                    <input type="checkbox" name="css">
                </td>
                <td>
                    <input type="checkbox" name="javascript">
                </td>
                <td>
                    <input type="checkbox" name="php">
                </td>
            </form>
            </tr>
        @endforeach
    </table>
@endsection$table->increments('id');
$table->timestamps();
$table->integer('user_id')->unsigned();
$table->foreign('user_id')->references('id')->on('users');
$table->integer('subject_id')->unsigned();
$table->foreign('subject_id')->references('id')->on('subjects');
$table->boolean('passed')->default(false);
});