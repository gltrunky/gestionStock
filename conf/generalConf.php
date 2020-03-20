<?php
// #############################################################################
// INFO SERVEUR ################################################################
// #############################################################################

// echo __DIR__ ."<br>";
// echo $_SERVER['SERVER_NAME']."<br>";
// echo $_SERVER['REMOTE_ADDR']."<br>";
// die("Die ici ==> ".$_SERVER['PHP_SELF']); /* */
// Mode test - actif : 0-1
define('MODE_TEST', 0);


// #############################################################################
// LOCAL CONFIGURATION #########################################################
// #############################################################################
if ($_SERVER['SERVER_NAME'] == "projetgestionstock" or $_SERVER['REMOTE_ADDR'] == "::1") {
    // Conf email support technique
    define('EMAIL_SUPPORT_TECH', 'almartin86@yahoo.fr');
    // Conf nom de domaine - Sert pour les communications
    define('WWW_NDD_GENERAL', 'gestion_stock');
    // Conf Database
    define('HOST_DATABASE', '127.0.0.1');
    define('USERNAME_DATABASE', 'root');
    define('PASSWORD_DATABASE', '');
    define('CHARSET_BDD', 'UTF8');
    // Nom Bdd Applications
    define('DATABASE_NAME_GESTION_STOCK', 'gestion_stock'); // Bdd locale
    // define('DATABASE_NAME_GESTION_STOCK_ARCHIVE', 'gestion_stock_archive'); // Bdd copie de prod
    // Definition du path en local de la racine du projet
    define('PATH_MACHINE', 'A:/Trunky/conceptionWeb/CDA/projetGestionStock/projetStock/');
    // Definition du path du host principal
    define('HTTP_PATH_HOST_PRINCIPAL', 'http://projetgestionstock/');
    // Definition du path des views
    define('HTTP_PATH_VIEWS', 'views/');
    // Var de sécurité pour l'authentification
    define('VAR_SECURE_AUTH', 'alemar86-100786-coquinou');
    // Langue par defaut
    define('LANGUE_PAR_DEFAUT', 'fra');
    // Nom des cookies
    define('COOKIE_RESTER_CONNECTE', "cookie_gestion_stock");
    define('COOKIE_HTTPS_ONLY', FALSE);
    // Url api curl
    define('URL_CURL_API_REST', HTTP_PATH_HOST_PRINCIPAL . 'api/rest/');

    // #############################################################################
    // EXT CONFIGURATION ###########################################################
    // #############################################################################
} elseif ($_SERVER['SERVER_NAME'] == "www.toto.com" or $_SERVER['REMOTE_ADDR'] == "198.58.99.125") {

    // ###############################################################
    // ################ CONF DES SERVICES ############################
    // ###############################################################

    // ################ CONF PROD ###########################
    // Conf email support technique
    define('EMAIL_SUPPORT_TECH', 'almartin86@yahoo.fr');
    // Conf nom de domaine - Sert pour les communications
    define('WWW_NDD_GENERAL', 'gestion_stock');
    // Conf Database
    define('HOST_DATABASE', '127.0.0.1');
    define('USERNAME_DATABASE', 'root');
    define('PASSWORD_DATABASE', '');
    define('CHARSET_BDD', 'UTF8');
    // Nom Bdd Applications
    define('DATABASE_NAME_TOTO', 'toto'); // Bdd locale
    // define('DATABASE_NAME_TOTO02', 'toto2'); // Bdd copie de prod
    // Definition du path en local de la racine du projet
    define('PATH_MACHINE', 'D:/workspace/toto/');
    // Definition du path du host principal
    define('HTTP_PATH_HOST_PRINCIPAL', 'http://toto/');
    // Definition du path du dossier readme process
    define('HTTP_PATH_SERVICES', 'toto/');
    // Definition du path des views
    define('HTTP_PATH_VIEWS', 'views/');
    // Var de sécurité pour l'authentification
    define('VAR_SECURE_AUTH', 'yoyo');
    // Langue par defaut
    define('LANGUE_PAR_DEFAUT', 'fra');
    // Nom des cookies
    define('COOKIE_RESTER_CONNECTE', "yaya");
    define('COOKIE_HTTPS_ONLY', FALSE);
    // Url api curl
    define('URL_CURL_API_REST', HTTP_PATH_HOST_PRINCIPAL . 'api/rest/');

    // #############################################################################
    // SI ERREUR ###################################################################
    // #############################################################################
} else {
    die("Une erreur c'est produite. ERROR A00000001.");
}
