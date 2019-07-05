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
<form action="{{ route('bioskop.add') }}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" aria-describedby="titleHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input name="location" type="text" class="form-control" id="location" placeholder="Enter Location">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>