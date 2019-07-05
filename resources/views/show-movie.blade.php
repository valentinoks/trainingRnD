<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center align-item-center">
                <img src="{{asset('storage/images/'.$movie->image)}}" alt="" height="250" width="500">
        </div>
        <div class="synopsis">
            <p>{{$movie->synopsis}}</p>
        </div>
        <div class="comment">
            <h1>Comment</h1>
            <hr>
            @foreach($movie->comments as $comment)
                <div class="content">
                    <p>{{$comment->comment}}</p>
                </div>
            @endforeach
        
        </div>
    </div>
</body>
</html>