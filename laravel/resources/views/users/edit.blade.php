@extends('layout.app')
@section('content')

<form action="{{route('users.update', $user->id)}}" method="POST" class="container" enctype="multipart/form-data" >
    @method('PUT')
    @csrf

<div>
    <label for="name" class="col-md-4 col-form-label text-md-right fw-bold">{{__('Name *')}}</label>
    <input type="text" id="name" value="{{old('name')}}" name="name" class="form-control"> 
</div>

<div>
    <label for="surname" class="col-md-4 col-form-label text-md-right fw-bold">SURNAME</label>
    <input type="text" id="surname" value="{{old('surname')}}" name="surname" class="form-control">
</div>

<div>
    <label for="email" class="col-md-4 col-form-label text-md-right fw-bold">EMAIL</label>
    <input type="text" id="email" value="{{old('email')}}" name="email" class="form-control">
</div>

<div>
    <label for="birthday" class="col-md-4 col-form-label text-md-right fw-bold">BIRTHDAY</label>
    <input type="date" id="birthday" name="birthday" value="{{old('birthday')}}" class="form-control">
</div>

<div class="my-3">
    <button type="submit" class="btn btn-primary">
        Save    
    </button>
</div>
<div>
    @if ($errors->any())
    <div >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

</form>
@endsection