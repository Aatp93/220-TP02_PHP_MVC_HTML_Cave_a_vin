<?php 
   include 'modele/articleModele.php';
    switch ($action) {
        case 'liste':
         

            $vue = 'vues/articles/listeVin';

            break;
        case 'create':
            if ($_SERVER['REQUEST_METHOD'] == 'GET')
            $vue ='vues/articles/createVin';
             else {
               
                createVin();
                header('Location: index.php?entite=vin&action=liste');
             }
            break; 
        case 'modif':
            $vue = 'vues/articles/modifVin';
            break;
        case 'supprimer':
            $vue = 'vues/articles/supprimerVin';
            break;
        default:
            # code...
            break;
    }
