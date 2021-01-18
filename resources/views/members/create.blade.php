@extends('members.layout')
@section('content')

<div>
    <form action="{{route('members.store')}}" method="POST">
    @csrf
        User name :
        <input type="text" name="user_name" placeholder="ayan123">
        <br>
        firs name :
        <input type="text" name="first_name" placeholder="ayan123">
        <br>
        last name :
        <input type="text" name="last_name" placeholder="ayan123">
        <br>
        mobile :
        <input type="text" name="mobile" placeholder="ayan123">
        <br>
        email :
        <input type="text" name="email" placeholder="ayan123">
        <br>
        <button type="submit">Sumbit</button>

    </form>
</div>