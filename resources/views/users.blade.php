<ul>
    @foreach($users as $user)

            <li>{{ $user->name }}  {{ $user->id }}</li>

    @endforeach
</ul>
