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
                <th>Name</th>
                <th>Location</th>
                <th>Action</th>                
                </tr>
            </thead>
            <body>
               @foreach($bioskops as $bioskop)
               <tr>
                    <td>{{ $bioskop->name }}</td>
                    <td>{{ $bioskop->location  }}</td>
                    <td>
                        <form action="{{route('bioskop.delete', $bioskop->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                     </td>
                    <td>
                        <a href="{{route('bioskop.edit', $bioskop->id)}}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
               @endforeach
            </body>
        </table>
        {{ $bioskops->links() }}
    </div>
</body>
</html>