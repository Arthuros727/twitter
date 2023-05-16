<?php 


spl_autoload_register(function ($class) {
    include_once('classes/' . $class . '.php');
});

$url = $_SERVER['REQUEST_URI'];

$segments = explode('/', $url);

$page = $segments[1];
if ($page == '') {
    $page = 'accueil'; // page par défaut
}

switch ($page) {
    case 'accueil':
        include('pages/accueil.php');
        break;
    case 'profil':
        include('pages/profil.php');
        break;
    case 'messages':
        include('pages/messages.php');
        break;
    default:
        include('pages/404.php'); // page d'erreur 404
        break;
}

?>

