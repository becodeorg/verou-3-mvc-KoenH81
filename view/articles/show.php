<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>
    <h1><?= $books->title ?></h1>
    <p><?= $books->description ?></p>
    <p><?= $books->publishDate ?></p>

    <?php // TODO: links to next and previous ?>
    <a href="#">Previous article</a>
    <a href="#">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>