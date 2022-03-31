<?php 

require "model.php";
require "../helpers/form-helper.php"; //Importation de toutes les focntions qui se situe dans fomer-helper
require "../helpers/auth-helper.php";
/* if (empty(trim($inputs['title']))  "   ml    " => "ml" TRIM permet de suprimer les espace avant et apre*/
function validateInputs($inputs){
    $errors = [];
    if (empty(trim($inputs['title']))) {
        $errors['title'] = 'Title is required';
    }
    if (empty(trim($inputs['content']))) {
        $errors['content'] = 'Content is required';
    }
    return $errors;
}

/* if(isset ($_POST)) similaire on regarde si on a evoyer une request post*/
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $validations = validateInputs($_POST);
    $article = [
        
        'title' => sanitize_input($_POST['title']),  // Ajout la fonction sanitize_input au $_POST['title'] et recrache la phrase epurer par purificateur de donnée 
        'content' => sanitize_input($_POST['content'])
    ];
        /*sizeof = la taille de */
    if (sizeof($validations) === 0 ){
        try{ //essayer de faire ceci, 
            insertArticle($article); //Permet d'appeler la fonction pour envoyer l'élément dans la db
            //header('location: ../articles'); // Dit que si on ajoute l'articles on nous renvoie sur la page articles 
            redirect('location: ../articles');
        }catch (PDOException $exception){     //catch dit que l'erreur est gerer et n'affiche donc rien (PDOException) Librairie de bases de donnée 
                echo $exception->getMessage();
        } 
      }else{
        echo"It's not ok !";
         var_dump($validations) ; /*var_dump affiche le tablea de la fontion validateInputs($inputs)  */
    }
}



require "view.php";

