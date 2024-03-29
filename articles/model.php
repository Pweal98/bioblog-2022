<?php

require_once "../config/db.php";

function getArticles() {
    global $db_default_connection;
    $query = "SELECT id, title, content, creation_date FROM articles";
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute();
    return $stmt;
}

function getMappedArticles() {
    $stmt = getArticles();
    $count = $stmt->rowCount();

    $articles = [];

    if ($count > 0) {
        // Fetch le prochain article et le sauver dans la variable $article
        while($article = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $mapped_article = [
                "id" => +$article["id"], /* Ajout du + pour dire que c'est une nombre */
                "title" => $article["title"],
                "content" => $article["content"],
                "creationDate" => date_create($article["creation_date"])
            ];
            array_push($articles, $mapped_article);
        }
    }

    return $articles;
}

