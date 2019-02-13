<h1 class="title">Students</h1>

    <ul>
        @foreach($users as $user)
            <li>
                <a href="/users/{{ $user->id }}">
                    {{ $user->name }}
                </a>
            </li>
        @endforeach
    </ul>