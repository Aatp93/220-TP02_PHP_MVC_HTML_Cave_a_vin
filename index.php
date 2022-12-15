<?php
session_start();
if (!isset($_SESSION['role'])) {
    $_SESSION['role'] = 'ROLE_VISITEUR';
}

$vue = 'home';

if (!empty($_GET)) {
    $entite = filter_input(INPUT_GET, 'entite', FILTER_SANITIZE_SPECIAL_CHARS);
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

    switch ($entite) {
        case 'mentions':
            $vue = 'mentions';
            break;

        case 'vin';
            include 'controleurs/articleControleur.php';
            break;

        case 'panier';
            include 'controleurs/panierControleur.php';
            break;

        case 'user';
            include 'controleurs/userControleur.php';
            break;
        default:
            # code...
            break;
    }
}


// inclusion du template 
include 'vues/template.php';
