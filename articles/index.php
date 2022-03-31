<?php

require "./model.php";

$articles_list = getMappedArticles(); /* Ajout d'une fonction dans une variable */ 

require "./view.php";
