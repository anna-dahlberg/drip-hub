<x-layout>
    <section class="users">
        @foreach ($users as $user)
        <a href="{{ route('users.edit',  $user->id) }}" class="user-card">
            <h3>{{ $user->name }}</h3>
            <p>{{ $user->email }}</p>
            <small>{{ $user->role->name }}</small>
        </a>
        @endforeach
    </section>
</x-layout>
