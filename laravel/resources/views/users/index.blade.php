@extends('layout.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Birthday</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr>
                <th scope="row">1</th>
                <td><a href="{{route('users.show', $user)}}">{{$user->name}}</a></td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->birthday}}</td>
                <td>
                    <form class="margin-left-auto form-delete" action="{{route('users.destroy',$user)}}" method="POST" data-delete-name="{{$user->name}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger w-100 form-delete-btn">Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection