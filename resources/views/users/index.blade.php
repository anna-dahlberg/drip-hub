<x-layout>
    <section class="products">
        @foreach ($users as $user)
        <a href="{{ route('users.edit',  $user->id) }}" class="product-card">
            <h4>{{ $user->name }}</h4>
            <p>{{ $user->email }}</p>
            <p>{{ $user->role->name }}</p>
        </a>
        @endforeach
    </section>
</x-layout>
