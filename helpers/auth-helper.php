<?php 



function redirect($url, $permanent = false){
    if(headers_sent() === false){
        header("location: $url" , true, $permanent === true ? 301 : 302 ); // Perment permet de rediriger un code 301 ou 302 en fonction de ce qu'on veut
    }
    exit(); // sa veut dire qu'on arret le script une fois executer 
}