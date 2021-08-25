<h1>This is lisst user page</h1>
<ul>
@foreach($users as $user)
    <li>{{ $user->name }}</li>
@endforeach
</ul>