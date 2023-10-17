<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP 50</title>
</head>

<body>
    <h1>TOP 50</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Year</th>
        </tr>
        <?php foreach ($movies as $movie) : ?>
            <tr>
                <td><?= $movie->name ?></td>
                <td><?= $movie->year ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/">Home</a>
</body>

</html>