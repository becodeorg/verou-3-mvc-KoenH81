<?php require 'View/includes/header.php' ?>

<?php // Use any data loaded in the controller here 
?>

<section>
    <h1><?= $books[0]->title ?></h1>
    <p><?= $books[0]->description ?></p>
    <p><?= $books[0]->publishDate ?></p>

    <?php // TODO: links to next and previous 
    ?>
    <a href="index.php?page=articles-show&book_id=<?= $previousB ?>">Previous article</a>
    <a href="index.php?page=articles-show&book_id=<?= $nextB ?>">Next article</a>
</section>

<?php require 'View/includes/footer.php' ?>

//$ArticleController->previousB()
//$ArticleController->$previousBookid