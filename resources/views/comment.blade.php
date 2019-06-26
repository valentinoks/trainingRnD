<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th>Username</th>
                <th>Comment</th>
                <th>Action</th>
                </tr>
            </thead>
            <body>
               @foreach($comments as $comment)
               <tr>
                    <td>{{ $comment->user }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>
                        <form action="{{route('comment.delete', $comment->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                     </td>
                    <td>
                        <a href="{{route('comment.edit', $comment->id)}}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
               @endforeach
            </body>
        </table>
        {{ $comments->links() }}
    </div>
</body>
</html>