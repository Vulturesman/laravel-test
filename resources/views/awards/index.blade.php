<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Awards</title>
</head>

<body>

    <h1>List of movie awards!</h1>

    <p>Bacon ipsum dolor amet shank burgdoggen flank shoulder, filet mignon jowl swine beef kielbasa. Kielbasa picanha cupim andouille ham hock. Bresaola pork loin tongue, porchetta kevin turkey meatloaf andouille tail boudin drumstick flank filet mignon tri-tip ham. Pig pastrami meatloaf burgdoggen tongue bresaola boudin leberkas. Meatloaf porchetta ribeye, beef ribs ham hock tri-tip prosciutto fatback chislic shank shankle biltong drumstick swine strip steak.</p>

    <h2> Hello <?= $hello ?> </h2>

    <ul>
        <?php foreach ($awards as $award) : ?>
            <li>
                <?= $award; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="/">Home</a>
</body>

</html>