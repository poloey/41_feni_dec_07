@extends('master')

@section('content')
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>About page</h2>
    </div>
    <div class="card-body">
      <form action="/create" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-warning">Create a Post</button>
        </div>
        
      </form>
    </div>
  </div>
</div>
@endsection