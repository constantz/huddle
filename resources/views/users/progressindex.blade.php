<h1 class="title">Students</h1>

    <ul>
        @foreach($students as $student)
            <li>
                <a href="/progress/{{ $student->id }}">
                    {{ $student->name }}
                </a>
            </li>
        @endforeach
    </ul>