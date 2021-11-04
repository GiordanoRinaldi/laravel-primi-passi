<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>
    <h1>HELLO WORLD! MODDAFAKA!</h1>
    <h2>{{$nome}}</h2> 
    <h2>{{$cognome}}</h2>
    @foreach ($asRoma as $cori)
        <div>
            <h2>{{$cori}}</h2>
        </div>
    @endforeach
</body>
</html>