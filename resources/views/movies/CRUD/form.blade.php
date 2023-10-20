<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add movie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

    @include('components.messages')

    @if ($movie->id)
                    {{-- /movies/{{ $movie->id }} --}}
        <form action="{{ route('movies.update', $movie->id) }}" method="post">
            @method('put')
    @else
        <form action="{{ route('movies.store') }}" method="post">
    @endif
            @csrf

            <label>Name:</label>
            <br>
            <input name="name" value="{{ old('name', $movie->name) }}"/>
            <br>
            <label>Year:</label>
            <br>
            <input name="year" value="{{ old('year', $movie->year) }}"/>

            <button>Save</button>
        </form>


    @if ($movie->id)
        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
    @endif

    
</body>
</html>