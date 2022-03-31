<?php 

// Renforcer la sécuriter du site en filrtant plusisuer fois le texte entrée
function sanitize_input($data){
    $data = trim($data);
    $data = stripslashes($date); // Permet de suprimer  les \
    $data = htmlspecialchars($data);
    return $data;
}

