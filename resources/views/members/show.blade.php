@extends('members.layout')
@section('content')



<div class="container">
<a class="btn btn-danger mt-3" href="{{route('members.index')}}">Go to home</a>
<h2 class="mt-4 mb-4">SHOW</h2>
    <form action="{{route('members.update', $member->id)}}" method="POST">
    @csrf
    @method('PUT')
        User name :
        <input type="text" name="user_name" class="form-control" placeholder="ayan123" value="{{$member->user_name}}" readonly>
        <br>
        firs name :
        <input type="text" name="first_name" class="form-control" placeholder="ayan123" value="{{$member->first_name}}" readonly>
        <br>
        last name :
        <input type="text" name="last_name" class="form-control" placeholder="ayan123" value="{{$member->last_name}}" readonly>
        <br>
        mobile :
        <input type="text" name="mobile" class="form-control" placeholder="ayan123" value="{{$member->mobile}}" readonly>
        <br>
        email :
        <input type="text" name="email" class="form-control" placeholder="ayan123" value="{{$member->email}}" readonly>
        <br>

    </form>
</div>