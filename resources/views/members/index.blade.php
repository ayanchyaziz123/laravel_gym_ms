@extends('members.layout')
@section('content')

<div>
    <table border="2">
    <tr>
    <th>User name</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Action</th>

   
    </tr>
    @foreach ($members as $member)

    <tr>
    <td>{{$member->user_name}}</td>
    <td>{{$member->first_name}}</td>
    <td>{{$member->last_name}}</td>
    <td>{{$member->mobile}}</td>
    <td>{{$member->email}}</td>
    <td>{{$member->email}}</td>
    <td>
    <form  action="{{route('members.destroy', $member->id)}}" method="POST">
    <a href="{{route('members.edit', $member->id)}}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
    </form>
    </td>

    </tr>
    @endforeach
    </table>
</div>