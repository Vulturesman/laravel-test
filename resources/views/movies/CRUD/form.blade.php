<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add movie</title>
</head>
<body>

    @if ($movie->id)
        <form action="" method="post">
            @method('put')
    @else
        <form action="{{ route('movies.store') }}" method="post">
    @endif
            @csrf

            <label>Name:</label>
            <br>
            <input name="name"/>
            <br>
            <label>Year:</label>
            <br>
            <input name="year"/>

            <button>Save</button>
        </form>
    
</body>
</html>