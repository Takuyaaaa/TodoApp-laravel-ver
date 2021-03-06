<!DOCTYPE HTML>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Todo App</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand mb-0 text-white h1" href="/todo">Todo App</a>
        @if(Auth::check())
            <a class="navbar-text text-white" href="/todo/create">Create New Todo</a>
        @endif
        <a class="navbar-text text-white" href="/todo/register">Register New User</a>
        @if (!Auth::check())
            <a class="navbar-text text-white" href="/todo/login">Login</a>
        @else
            <a class="navbar-text text-white" href="/todo/logout">Logout</a>
        @endif
    </nav>

    <div class="container">
        @yield("content")
    </div>


</body>
</html>
