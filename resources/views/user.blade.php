<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mi practiquita</title>
</head>
<body>
    <h1>listado de usuarios</h1>

    <ul>
     

    @foreach($usuarios as $user)
    <li>{{ $user }}.{{ date("d-m-y") }}</li>
    
    @endforeach
    
    </ul>
</body>
</html>