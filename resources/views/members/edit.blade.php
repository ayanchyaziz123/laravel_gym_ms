@extends('members.layout')
@section('content')


@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<div class="container">
<h1 class="m-5">Edit</h1>
    <form action="{{route('members.update', $member->id)}}" method="POST">
    @csrf
    @method('PUT')
        User name :
        <input type="text" name="user_name" class="form-control" placeholder="ayan123" value="{{$member->user_name}}">
        <br>
        firs name :
        <input type="text" name="first_name" class="form-control" placeholder="ayan123" value="{{$member->first_name}}">
        <br>
        last name :
        <input type="text" name="last_name" class="form-control" placeholder="ayan123" value="{{$member->last_name}}">
        <br>
        mobile :
        <input type="text" name="mobile" class="form-control" placeholder="ayan123" value="{{$member->mobile}}">
        <br>
        email :
        <input type="text" name="email" class="form-control" placeholder="ayan123" value="{{$member->email}}">
        <br>
        <button class="btn btn-info" type="submit">Update</button>

    </form>
</div>