@extends('app')
@section('content')
<h1>This is lisst user page</h1>
@if(isset($category))
    <h2>{{$category}}</h2>
@endif
<ul>
@foreach($users as $user)
    <li>{{ $user->name }}</li>
@endforeach
</ul>
@endsection