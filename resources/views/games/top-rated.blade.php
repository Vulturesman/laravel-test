<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP 50 games</title>
</head>

<body>
    <h1>TOP 50 games</h1>

    <table>
        <tr>
            <th>Game</th>
            <th>Year</th>
        </tr>
        <?php foreach ($games as $game) : ?>
            <tr>
                <td><?= $game->name ?></td>
                <td><?= $game->year ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/">Home</a>
</body>

</html>