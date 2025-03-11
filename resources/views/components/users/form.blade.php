@csrf

<div class="input-container">
    <label for="name">Name</label>
    <input type="text" name="name" class="user-form-input" value="{{ old('name', $user?->name) }}" required>
</div>

<div class="input-container">
    <label for="email">Email</label>
    <input type="email" name="email" class="user-form-input" value="{{ old('email', $user?->email) }}" required>
</div>

@if ($addPassword)
<div class="input-container">
    <label for="password">Password</label>
    <input type="password" name="password" class="user-form-input" {{ $user ? '' : 'required' }}>
</div>

<div class="input-container">
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" class="user-form-input" {{ $user ? '' : 'required' }}>
</div>
@endif

<div class="input-container">
    <label for="role_id">Role</label>
    <select name="role_id" id="role_id" class="user-form-input" required>
        <option value="">Select User Role</option>
        @foreach($roles as $role)
            <option value="{{ $role->id }}" {{ optional($user)->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="user-form-button">Save!</button>

