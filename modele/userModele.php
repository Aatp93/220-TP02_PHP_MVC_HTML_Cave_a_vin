<?php

require 'dao/dao.php';

function verifEmail()
{

    global $email;
    global $erreur;

    $psw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($email) {

        $personne = getUserByMail($email);

        if ($personne) {

            if (password_verify($psw, $personne['password'])) {

                $_SESSION['email'] = $personne['email'];
                $_SESSION['role'] = $personne['roles'];
            }
            $erreur = 'Mot de passe incorrect';
        } else {
            $erreur = 'Login non trouvé';
        }
    } else {
        $erreur = 'Le login doit etre un mail valide';
    }
};
