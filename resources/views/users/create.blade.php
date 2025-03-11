<x-layout>

    <x-errors />


    <form method="POST" class="user-form" action="{{ route('users.store')}}">
        <x-users.form :user="$user ?? null" :roles="$roles" :addPassword="true"></x-users.form>
    </form>

</x-layout>