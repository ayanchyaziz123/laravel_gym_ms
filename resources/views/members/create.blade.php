@extends('members.layout')
@section('content')

<div class="container">
    <h3 class="m-5">Add A Members</h3>
    <form action="{{route('members.store')}}" method="POST">
    @csrf
        User name :
        <input type="text" name="user_name" class="form-control" placeholder="ayan123">
        <br>
        firs name :
        <input type="text" name="first_name" class="form-control" placeholder="First name">
        <br>
        last name :
        <input type="text" name="last_name" class="form-control" placeholder="Last name">
        <br>
        mobile :
        <input type="text" name="mobile" class="form-control" placeholder="017*****">
        <br>
        email :
        <input type="text" name="email" class="form-control" placeholder="gym@gmail.com">
        <br>
        <button class="btn btn-info" type="submit">ADD</button>

    </form>
</div>