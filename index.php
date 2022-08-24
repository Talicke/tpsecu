<?php
    include './utils/function.php';

    session_start();

    $_SESSION['id_role'] = 2 ;

    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';

    switch($path){

        case $path === '/Tpsecu/addEvent' :
            include "./ctrl/ctrl_create_event.php";
            break;

        case $path === '/Tpsecu/' :
            include "./ctrl/ctrl_show_event.php";
            break;
        }
        
?>