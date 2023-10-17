<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Awards</title>
</head>

<body>

    <h1>Movie Website</h1>

    <p>Bacon ipsum dolor amet shank burgdoggen flank shoulder, filet mignon jowl swine beef kielbasa. Kielbasa picanha cupim andouille ham hock. Bresaola pork loin tongue, porchetta kevin turkey meatloaf andouille tail boudin drumstick flank filet mignon tri-tip ham. Pig pastrami meatloaf burgdoggen tongue bresaola boudin leberkas. Meatloaf porchetta ribeye, beef ribs ham hock tri-tip prosciutto fatback chislic shank shankle biltong drumstick swine strip steak.</p>


    <a href="/awards">Awards</a>
    <a href="/top-rated-movies">Top 50 Movies</a>
    <a href="/top-rated-games">Top 50 Games</a>
    <a href="/movies/shawshank-redemption">Shawshank</a>

    <h3>Just a top 10 list of all times</h3>
    <ul>
        <?php foreach ($movies as $movie) : ?>
            <li>
                <?= $movie->name ?> (<?= $movie->year ?>)
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>