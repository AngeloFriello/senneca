@extends('layout.app')
@section('content')

<form action="{{route('users.store')}}" method="POST">

@csrf

<div>
    <label for="name">NAME</label>
    <input type="text" id="name" value="" name="name">
</div>

<div>
    <label for="surname">SURNAME</label>
    <input type="text" id="surname" value="" name="surname">
</div>

<div>
    <label for="email">EMAIL</label>
    <input type="text" id="email" value="" name="email">
</div>

<div>
    <label for="birthday">BIRTHDAY</label>
    <input type="date" id="birthday" name="birthday" value="">
</div>

<div>
    <button type="submit">
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