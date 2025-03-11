<x-layout>

    <x-errors />

    <form method="POST" class="user-edit-form" action="{{ route('users.update', $user)}}">
        @method('PATCH')

        <x-users.form :user="$user" :roles="$roles" :addPassword="false"></x-users.form>

    </form>

    <form method="POST" action="{{ route('users.destroy', $user) }}" 
        onsubmit="return confirm('Are you sure you want to delete this user?')">
        @method('DELETE')
        @csrf
        <button type="submit" class="user-delete-button">Delete</button>
    </form>
    
</x-layout>