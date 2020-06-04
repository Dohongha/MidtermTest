@extends('layouts.main')

@section('content')
<table class="table table-striped">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Username</td>
        <td>Password</td>
    </tr>

    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->password}}</td>
            <td>
        </tr>
    @endforeach
</table>
@endsection