@extends('layouts.app')
@section('content')
<form action="{{route('admin.posts.update', $post->id)}}" method="post">
    @csrf
    @method('PATCH')
  <div class="mb-3">
    <label for="titolo" class="form-label">Titolo</label>
    <input type="text" name="title" class="form-control" value="{{$post->title}}" id="titolo" aria-describedby="emailHelp">
  </div>
  <div class="form-floating">
    <label for="descrizione" class="form-label">Descrizione</label>
    <textarea class="form-control" name="content" id="descrizione" style="height: 100px">{{$post->content}}</textarea>
</div>
  <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>
@endsection