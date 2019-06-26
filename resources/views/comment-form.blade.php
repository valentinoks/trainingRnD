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
<form action="{{ route('comment.add') }}" method="POST">
@csrf
<div class="form-group">
    <input name="user" type="text" class="form-control" 
    id="user" aria-describedby="userHelp" placeholder="Enter Username">
</div>
  <div class="form-group">
    <label for="comment">Comment</label>
    <textarea name="comment" type="text" class="form-control" 
    id="comment" aria-describedby="commentHelp" placeholder="Enter Comment"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>