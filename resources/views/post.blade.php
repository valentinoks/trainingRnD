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
                <th>Description</th>
                <th>Author</th>
                <th>Action</th>
                </tr>
            </thead>
            <body>
               @foreach($posts as $post)
               <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                    </td>
                </tr>
               @endforeach
            </body>
        </table>
        {{ $posts->links() }}
    </div>
</body>
</html>