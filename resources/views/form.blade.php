<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
        <meta http-equiv="content-type" content="text/html; charset= UTF-8">
        <title>Create your profile</title>
    </head>
    <body>
        <form action="action.page.php">
            <div class="container">
                <label for="title">Title:</label>
                <input type="text" id="title" placeholder="Title" name="title" required>
                <label for="description">Description:</label>
                <input type="text" id="description" placeholder="Description" name="description" required>
                <label for="author">Author:</label>
                <input type="text" id="author" placeholder="Author" name="author" required>
                <input type="submit" value="Add Post">
            </div>
        </form>
    </body>
</html>