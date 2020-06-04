@extends('layouts.main')

@section('content')   
<form action="{{ action('ThreadController@update', ['thread' => $thread]) }}" method="POST">
    @method('PUT')
    @include('layouts.form')
    <div>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection