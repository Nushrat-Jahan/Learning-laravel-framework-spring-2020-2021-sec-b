<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <p>Welcome Home</p>
    <a href="{{route('home.profile')}}"><button class="btn btn-success" style="margin:5px">Profile</button>
    <a href="{{route('home.customerlist')}}"><button class="btn btn-success" style="margin:5px">View Customer</button>
    <a href="{{route('home.medicinelist')}}"><button class="btn btn-success" style="margin:5px">View Customer</button>
    <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out     </button></a>
</body>
</html>