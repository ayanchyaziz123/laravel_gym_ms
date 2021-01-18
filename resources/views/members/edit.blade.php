@extends('members.layout')
@section('content')

<div>
    <form action="{{route('members.update')}}" method="POST">
    @csrf
    @method('PUT')
        User name :
        <input type="text" name="user_name" placeholder="ayan123" value="{{$member->user_name}}">
        <br>
        firs name :
        <input type="text" name="first_name" placeholder="ayan123" value="{{$member->first_name}}">
        <br>
        last name :
        <input type="text" name="last_name" placeholder="ayan123" value="{{$member->last_name}}">
        <br>
        mobile :
        <input type="text" name="mobile" placeholder="ayan123" value="{{$member->mobile}}">
        <br>
        email :
        <input type="text" name="email" placeholder="ayan123" value="{{$member->email}}">
        <br>
        <button type="submit">Update</button>

    </form>
</div>