@extends('members.layout')
@section('content')

<div class="container">
<a class="btn btn-info m-3" href="{{route('members.create')}}">Add a Member</a>
    <table class="table table-striped">
    <thead>
    <tr>
    <th scope="col">User name</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Mobile</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>

   
    </tr>
    </thead>
    @foreach ($members as $member)
    <tbody>

    <tr>
    <td>{{$member->user_name}}</td>
    <td>{{$member->first_name}}</td>
    <td>{{$member->last_name}}</td>
    <td>{{$member->mobile}}</td>
    <td>{{$member->email}}</td>
    <td>
    <form  action="{{route('members.destroy', $member->id)}}" method="POST">
    <a class="btn btn-primary" href="{{route('members.show', $member->id)}}">View</a>
    <a class="btn btn-warning m-2" href="{{route('members.edit', $member->id)}}">Edit</a>
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Delete</button>
    </form>
    </td>
    </tr>
    </tbody>
    @endforeach
    </table>
</div>