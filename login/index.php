<?php
 

require './model.php';



require_once '../helpers/form-helper.php';
require_once '../helpers/auth-helper.php';
#region Post logic  // permet de crée des groupe de code 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user_infos = [
        'username' => sanitize_input($_POST["username"]),
        'password' => sanitize_input($_POST["password"]),
    ];

    $user = 'bob';
    $pass = password_hash('bob', PASSWORD_DEFAULT); // password hash permet de crypter le mots de passe dans la db

    if($user_infos['username'] === $user && password_verify($user_infos['password'] , $pass)) {//Verifie si l'username est = a $user et on verifie que le mots de pass est = $pass qui lui est crypter
        init_session();
        $_SESSION['login'] = $user_infos['username'];
        
        $redirect = isset($_GET['redirect']) ? urldecode($_GET['redirect']) : '../articles'; 
        // redirect permet de verifier si il y a quelque chose dans "isset"($_GET['redirect'] alors on décode url de la quel 
        // on vient pour etre rediriger vers elle une fois connecter sinon si je vient de nul pars je suis diriger vers la page article
        redirect($redirect);
}

}
#endregion Post Logic

require './view.php';