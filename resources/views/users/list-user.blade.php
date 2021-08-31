@extends('app')
@section('content')
<h1>This is lisst user page</h1>
<h2>{{$category}}</h2>
<ul>
@foreach($users as $user)
    <li>{{ $user->name }}</li>
@endforeach
</ul>
@endsection