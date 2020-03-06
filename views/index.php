<?php
// Lancement de la session
    session_start();
// Encodage de la page
    header ("Content-Type: text/html; charset=utf-8");
// Conf générale
    require_once ("../conf/generalConf.php");
// Test de variable du generalconf
    // echo "variable EMAIL_SUPPORT_TECH: ". EMAIL_SUPPORT_TECH."<br>";
    // echo "variable LANGUE_PAR_DEFAUT: ". LANGUE_PAR_DEFAUT. "<br>";
    // if (LANGUE_PAR_DEFAUT == 'fra'){
    // echo "bonjour";
    // }
    // else {
    //     echo "hello";
    // }
// Autoloader Global
require_once (PATH_MACHINE."autoLoader/AutoLoad.php");
// Pour afficher les erreurs php
    if (MODE_TEST==1) {
        echo "Test activé <br>";
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }
// Sécurisation des vars reçus
    $arrayVar = Controllers::secureArray($_REQUEST);

// var_dump($arrayVar);
// appel du header
require_once ("header.php");
// appel du body
require_once ("main.php");
// appel du footer
require_once ("footer.php");    