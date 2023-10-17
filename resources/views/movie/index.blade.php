<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20 movies</title>
</head>

<body>

    <ul>
        @foreach ($movies as $movie)
        <li>
            {{ $movie->name }}
            (type: {{ $movie->movieType->name }})
        </li>
        @endforeach
    </ul>


    <a href="/">Home</a>
</body>

</html>