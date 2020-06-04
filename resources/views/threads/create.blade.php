@extends('layouts.main')

@section('content')

<div class="container">
    <form action="/threads" method=POST>
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="{{ old('title') }}">
            <small id="helpId" class="text-muted">Help text</small>
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
      
          <div class="form-group">
            <label for="">Body</label>
            <input type="text" name="body" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="{{ old('body') }}">
            <small id="helpId" class="text-muted">Help text</small>
            @error('body')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Category</label>
            <input type="text" name="category" id="" class="form-control" placeholder="" aria-describedby="helpId">
          </div>

          <div class="form-group">
            <label for="">User</label>
            <input type="text" name="user" id="" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
    </form>       
</div>
@endsection