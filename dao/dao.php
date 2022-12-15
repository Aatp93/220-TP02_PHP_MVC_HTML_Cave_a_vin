<?php

$dbconnect = new PDO('mysql:host=localhost;dbname=caveavin;charset=UTF8', 'root', '');

function getUserByMail(string $mail)
{


    global $dbconnect;

    $sql = 'SELECT * FROM user WHERE email =:mail;';

    //$user_stat = $dbconnect->query($sql);
    $user_stat = $dbconnect->prepare($sql);
    $user_stat->bindParam('mail', $mail);
    $user_stat->execute();

    if ($user_stat->rowCount() == 1) {

        $user = $user_stat->fetch(PDO::FETCH_ASSOC);
        $user_stat = NULL;
        $dbconnect = NULL;
        return $user;
    } else {
        $user_stat = NULL;
        $dbconnect = NULL;
        return false;
    }
};

function getArticles()
{

    global $dbconnect;

    $sql = 'SELECT  * FROM vin';


    $art_stat = $dbconnect->query($sql);


    $articles = $art_stat->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
};

function getArticleById($id)
{

    global $dbconnect;

    $sql = 'SELECT * FROM vin WHERE id = ' . $id . '';

    $art_stat = $dbconnect->query($sql);

    $art = $art_stat->fetch(PDO::FETCH_ASSOC);

    return  $art;
}

function setVin($region, $cepage, $milesime, $robe, $nom, $image, $update, $prix){

    global $dbconnect; 

    $sql= 'INSERT INTO vin VALUES(NULL, :region, :cepage, :milesime, :robe, :nom, :image, :update, :prix)';

    $vinStat = $dbconnect ->prepare($sql);
    $vinStat ->bindParam(':region', $region); 
    $vinStat ->bindParam(':cepage', $cepage); 
    $vinStat ->bindParam(':milesime', $milesime); 
    $vinStat ->bindParam(':robe', $robe); 
    $vinStat ->bindParam(':nom', $nom); 
    $vinStat ->bindParam(':image', $image); 
    $vinStat ->bindParam(':update', $update); 
    $vinStat ->bindParam(':prix', $prix); 
    $vinStat->execute();

}