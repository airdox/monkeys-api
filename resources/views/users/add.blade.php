<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add User</title>
    </head>
    <body>
        <h1>Add User</h1>
        <form method="post" action="{{ route('postData') }}">
            {{ csrf_field() }}
            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <button type="submit">Ajouter</button>
        </form>
    </body>
</html>
