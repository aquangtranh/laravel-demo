<h1>Create user form</h1>
@if(isset($category))
    <h2>{{$category}}</h2>
@endif
<form method="post" action="{{ route('users.store') }}">
    @csrf
    <label>Username</label>
    <input type="text" name="username"/>
    <label>Password</label>
    <input type="password" name="password"/>
    <button type="submit" class="btn btn-primary">Add</button>
</form>