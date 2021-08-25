<h1>Create user form</h1>
<form method="post" action="{{ route('users.store') }}">
    @csrf
    <label>Username</label>
    <input type="text" name="username"/>
    <label>Password</label>
    <input type="password" name="password"/>
    <button type="submit" class="btn btn-primary">Add</button>
</form>