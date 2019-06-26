<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
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
<form action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" value="{{$movie->title}}" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="synopsis">Synopsis</label>
    <input name="synopsis" type="text" class="form-control" value="{{$movie->synopsis}}" id="synopsis" placeholder="synopsis">
  </div>
  <div class="form-group">
    <label for="director">Director</label>
    <input name="director" type="text" class="form-control" value="{{$movie->director}}" id="director" placeholder="director">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input name="image" type="file" class="form-control-file" id="image" placeholder="image">
  </div>
  <div class="form-group">
    <label for="dateRelease">Release Date</label>
    <input name="dateRelease" type="text" class="form-control" value="{{$movie->dateRelease}}" id="dateRelease" placeholder="Release Date">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>