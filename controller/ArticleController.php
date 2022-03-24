<?php

declare(strict_types=1);

class ArticleController
{
    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles()
    {
        // TODO: prepare the database connection
        $databaseManager = new DatabaseManager('localhost', 'root', '', 'mvc');
        $databaseManager->connect();
        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)
        $rawArticles = [];
        $query = 'SELECT * FROM `articles`';
        $databaseManager->connection->query($query);
        $rawArticles = $databaseManager->connection->query($query);


        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['id'], $rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }
        var_dump($articles);
        return $articles;
    }

    public function show()
    {
        // TODO: this can be used for a detail page
        $databaseManager = new DatabaseManager('localhost', 'root', '', 'mvc');
        $databaseManager->connect();
        $bookDetail = [];
        $bookId = $_GET['book_id'];
        $query = "SELECT * FROM `articles` WHERE id = '{$bookId}'";
        $databaseManager->connection->query($query);
        $bookDetail = $databaseManager->connection->query($query);
        //var_dump($bookDetail);
        $books = [];
        foreach ($bookDetail as $bookD) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $books[] = new Book($bookD['id'], $bookD['title'], $bookD['description'], $bookD['publish_date']);
        };
        require 'view/articles/show.php';
        function previous()
        {
            $previousBookId = $_GET['book_id'] - 1;
            var_dump($previousBookId);
        };
        function next()
        {
            $nextBookId = $_GET['book_id'] + 1;
            var_dump($nextBookId);
        }
        previous();
    }
}
