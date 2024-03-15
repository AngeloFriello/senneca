@extends('layout.app')
@section('content')

@foreach ($users as $user)
<ul>
    <li><a href="{{route('users.show', $user)}}">{{$user->name}}</a></li>
</ul>
@endforeach