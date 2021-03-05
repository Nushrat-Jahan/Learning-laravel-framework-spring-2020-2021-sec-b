<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome home! {{ session('username') }} </h1>
    <a href="/logout">logout</a>
    {{session('msg')}}
</body>
</html>
