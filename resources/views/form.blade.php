<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $messages)
                    <li>{{$messages}}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('movie.add') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="synopsis">Synopsis</label>
    <input name="synopsis" type="text" class="form-control" id="synopsis" placeholder="synopsis">
  </div>
  <div class="form-group">
    <label for="director">Director</label>
    <input name="director" type="text" class="form-control" id="director" placeholder="director">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="image" class="form-control-file" id="imagw">
  </div>
  <div class="form-group">
    <label for="dateRelease">Release Date</label>
    <input name="dateRelease" type="text" class="form-control" id="dateRelease" placeholder="dateRelease">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>