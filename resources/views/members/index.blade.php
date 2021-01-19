@extends('members.layout')
@section('content')

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    

<div class="container">
    <a class="btn btn-info mt-5 mb-2" href="{{route('members.create')}}">Add a Member</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">User name</th>
                <th scope="col">First Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Fees</th>
                <th scope="col">Action</th>


            </tr>
        </thead>
        @foreach ($members as $member)
        

            <tr>
                <td>{{$member->user_name}}</td>
                <td>{{$member->first_name}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->address}}</td>
                <td>{{$member->fees}}</td>
                <td>
                    <form action="{{route('members.destroy', $member->id)}}" method="POST">
                        <a class="btn btn-primary" href="{{route('members.show', $member->id)}}">View</a>
                        <a class="btn btn-warning m-2" href="{{route('members.edit', $member->id)}}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        
        @endforeach
    </table>

</div>