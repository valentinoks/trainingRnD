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
                        <button class="btn btn-success">Reply Comment</button>
                    </td>
                </tr>
               @endforeach
            </body>
        </table>
        {{ $comments->links() }}
    </div>
</body>
</html>