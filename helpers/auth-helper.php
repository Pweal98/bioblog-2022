<?php 



function redirect($url, $permanent = false){
    if(headers_sent() === false){
        header("location: $url" , true, $permanent === true ? 301 : 302 ); // Perment permet de rediriger un code 301 ou 302 en fonction de ce qu'on veut
    }
    exit(); // sa veut dire qu'on arret le script une fois executer 
}


Function init_session(){
    session_start();
}

function prevent_not_connected($init_session = false) {   // Fonction qui permet de verifier notre connexion si  on est pas connecter on nous redirige sur la page de login 
    // $init_session la valeur en est false de base si on appel la fonction et que notre Function init_session(){ session_start();}
    // na pas encore été appele on dit que cette fois on l'active en disans quelle est  true et on démarre la sesion 
    
    // prevent_not_connected(true); active le session start une fois par page sinon
    // prevent_not_connected($init_session = false);

    if($init_session){ // ici la valeur retourne false de base mais a l'appel de la fonction on lui dit (true)  'bob' === 'bob => true   'bob' === 'chien => false
    init_session(); // appele de fonction session start
    }

    $connected = isset($_SESSION['login']);
    if(!$connected){
        $redirect_url = urlencode($_SERVER['PHP_SELF']); // Quel est mon url d'ou je vient 
        redirect('../login?redirect=' . $redirect_url);
    }
}