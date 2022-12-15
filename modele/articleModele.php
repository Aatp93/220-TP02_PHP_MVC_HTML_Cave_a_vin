<?php 

require_once 'dao/dao.php'; 

function listeDesVins(){

$listeDesVins = getArticles(); 

return $listeDesVins; 
var_dump($listeDesVins);

};

function createVin()
{
    // récupération des données du $_POST
    $region = filter_input(INPUT_POST, 'idRegion', FILTER_SANITIZE_SPECIAL_CHARS);
    $cepage = filter_input(INPUT_POST, 'idCepage', FILTER_SANITIZE_SPECIAL_CHARS);
    $milesime = filter_input(INPUT_POST, 'idMilesime', FILTER_SANITIZE_SPECIAL_CHARS);
    $robe = filter_input(INPUT_POST, 'idRobe', FILTER_SANITIZE_SPECIAL_CHARS);
    $nom = filter_input(INPUT_POST, 'idNom', FILTER_SANITIZE_SPECIAL_CHARS);
    $image = filter_input(INPUT_POST, 'idImage', FILTER_SANITIZE_SPECIAL_CHARS);
    $update= filter_input(INPUT_POST, 'idUpdate', FILTER_SANITIZE_SPECIAL_CHARS);
    $prix = filter_input(INPUT_POST, 'idPrix', FILTER_SANITIZE_SPECIAL_CHARS);
  
   
    // appel de la dao
    setVin ($region, $cepage, $milesime, $robe, $nom, $image, $update, $prix);
}