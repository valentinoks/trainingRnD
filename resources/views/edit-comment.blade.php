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
<form action="{{ route('comment.update', $comment->id) }}" method="POST">
@csrf
@method('PATCH')
<div class="form-group">
    <input name="user" type="text" class="form-control" value="{{$comment->user}}"
    id="user" aria-describedby="userHelp" placeholder="Enter Username">
</div>
  <div class="form-group">
    <label for="comment">Comment</label>
    <input name="comment" type="text" class="form-control" value="{{$comment->comment}}"
    id="comment" aria-describedby="commentHelp" placeholder="Enter Comment">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>