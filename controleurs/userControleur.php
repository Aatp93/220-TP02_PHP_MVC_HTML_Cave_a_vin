<?php

switch ($action) {
    case 'login':
        $vue = 'vues/user/login';
        $email = '';
        $erreur = '';
        break;
    case 'verif':
        include 'modele/userModele.php';
        $email = '';
        $erreur = '';
        verifEmail();
        if (empty($_SESSION)) {
            $vue = 'vues/user/login';
        } else {
            header('Location: index.php');
            exit();
        }
        break;
    case 'logout':
        session_destroy();
        header('Location: index.php');
        exit();
        break;
    default:
        # code...
        break;
}
