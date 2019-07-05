<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Bioskop</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

</head>
<body>
    <div class="container">
        <div class="synopsis">
            <p>{{$bioskop->location}}</p>
        </div>
        <div class="movie">
            <h1>Bioskop</h1>
            <hr>
            @foreach($bioskop->movies as $movie)
                <div class="content">
                    <p>{{$movie->movie}}</p>
                </div>
            @endforeach
        
        </div>
    </div>
</body>
</html>