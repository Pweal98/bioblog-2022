<?php

require_once "../config/db.php"; /*Une seul connexion la base de donnnée a la fois */

function insertArticle($article){
    global $db_default_connection; // dans une fonction on assez que a $artcile normalement grace a global $db_default_connection; sa me débloque les accés a toutes la bd//
    $query ="INSERT INTO articles(title, content, creation_date) Values(:title, :content, now())"; // ne pas concacainer dans une requete SQL
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute($article); // Dans l'envoie vers la base de donnée il va reprend les valeur qu'il y a dans artcile pour remplace :title et :content   
    return $stmt;

}