<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20 movies</title>
</head>

<body>
    <h1>Movie - Index - 20</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h2>{{ $movie->name }}</h2>
            (type: {{ $movie->movieType->name }}), <br>
            status: {{ $movie->movieStatus->slug }}, <br>
            genres:
            @foreach ($movie->genres as $genre)
            {{ $genre->name }}
            @endforeach
            <br>
            <ul>
                <li>Casting: 
                    @foreach ($movie->people as $person)
                    {{ $person->fullname }},
                    @endforeach   
                </li>
            </ul>
             <ul>
             @foreach ($movie->languages as $language)
            <li>{{ $language->name }}</li>
            @endforeach   
            </ul>
        </li>
        @endforeach
    </ul>


    <a href="/">Home</a>
</body>

</html>