@extends('layouts.main')

@section('content')
<div>
    <a href="{{ action('ThreadController@create') }}">
        <button type="button" class="btn btn-primary">Create</button>
    </a>
</div>
<br />

<table class="table table-striped">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Body</td>
        <td>Category</td>
        <td>User</td>
        <td>Actions</td>
    </tr>

    @foreach ($threads as $thread)
        <tr>
            <td>{{ $thread->id }}</td>
            <td>{{ $thread->title }}</td>
            <td>{{ $thread->body }}</td>
            <td>{{ $thread->category->id }}</td>
            <td>{{ $thread->user->id}}</td>
            <td>
                <a href="{{ action('ThreadController@edit', ['thread' => $thread]) }}">
                    <button class="btn btn-warning">Edit</button>
                </a>
                <a href="javascript:void(0)" onclick="document.getElementById('thread-delete-{{ $thread->id }}').submit()">
                    <button class="btn btn-danger">Delete</button>
                </a>
                <form method="POST" id="thread-delete-{{ $thread->id }}" action="{{ action('ThreadController@destroy', ['thread'=>$thread]) }}">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection