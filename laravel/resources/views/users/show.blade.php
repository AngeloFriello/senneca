@extends('layout.app')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12 card">
            <ul class="">
                <li>{{$user->name}}</li>
                <li>{{$user->surname}}</li>
                <li>{{$user->email}}</li>
                <li>{{$user->birthday}}</li>
                
                <a class="btn btn-primary"  href="{{route('users.edit', $user)}}">Modifica</a>
            </ul>
        </div>
        
    </divc>
</div>
@endsection