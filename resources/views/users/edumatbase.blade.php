


@section('content')

<h2>Lessen</h2>
<table>
<tr>
    <th>Lessen</th>

</tr>
@foreach ($edumats as $edumat)
<tr>
    <td><a href="users/edumat.blade.php"><button>{{$edumat->description}}</button></a></td>
</tr>


@endforeach
</table>
@endsection