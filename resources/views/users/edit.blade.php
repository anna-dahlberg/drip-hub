<x-layout>
<form method="POST" action="{{ route('users.update', $user)}}">
    @method('PATCH')
    <x-users.form :user="$user" :roles="$roles" :addPassword="false"></x-users.form>
</form>
<form method="POST" action="{{ route('users.destroy', $user) }}" 
onsubmit="return confirm('Are you sure you want to delete this user?')">
    @method('DELETE')
    @csrf
    <button type="submit">Remove user</button>
</form>
</x-layout>