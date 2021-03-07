<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome home! {{ session('username') }} </h1>
    <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out</button></a>
    {{session('msg')}}
</body>
</html>
