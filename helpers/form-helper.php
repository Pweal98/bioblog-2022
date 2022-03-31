<?php 

// Renforcer la sécuriter du site en filrtant plusisuer fois le texte entrée
function sanitize_input($data){
    $data = trim($data);
    $data = stripslashes($data); // Permet de suprimer  les \
    $data = htmlspecialchars($data); // Modifier les intégration des caracter 
    return $data;
}

