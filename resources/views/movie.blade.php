<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th>Title</th>
                <th>Synopsis</th>
                <th>Director</th>
                <th>Image</th>
                <th>Release Date</th>
                <th>Action</th>
                </tr>
            </thead>
            <body>
               @foreach($movies as $movie)
               <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->synopsis  }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>
                    <img src="{{ asset('storage/images/'.$movie->image) }}" alt="" height="100" width="150">
                    </td>
                    <td>{{ $movie->dateRelease }}</td>
                    <td>
                        <form action="{{route('movie.delete', $movie->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                     </td>
                    <td>
                        <a href="{{route('movie.edit', $movie->id)}}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
               @endforeach
            </body>
        </table>
        {{ $movies->links() }}
    </div>
</body>
</html>