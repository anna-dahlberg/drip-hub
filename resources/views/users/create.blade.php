<x-layout>
<form method="POST" action="{{ route('users.store')}}">
<x-users.form :user="$user ?? null" :roles="$roles" :addPassword="true"></x-users.form>
</form>
</x-layout>