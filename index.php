<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Première ligne
/*
- Créer un script php qui permet d'afficher les élèves
et les informations de l'élève dans une seule et même requête sql

SELECT * FROM `WB-eleves`, `WB-eleves-infos` WHERE 1

*/


    $servername = "localhost";
    $username = "id11175534_hor";
    $password = "azerty";
    $dbname = "id11175534_newbase";

    $conn = new mysqli($servername, $username, $password);
    $conn->select_db($dbname);
    $liste = "SELECT * FROM WB-eleves LEFT JOIN WB-eleves-infos ON (WB-eleves-infos.eleves.id = WB-eleves.id) WHERE 1";
    $result = $conn->query($liste);

    while($row = $result->fetch_assoc())
    {
        echo $row['prenom'].' '.$row['nom'].' '.$row['login'].' '.$row['password']."<br>";
        echo $row['age'].'ans'.' '.'habite à :'.' '.$row['ville'].' '.'surnom : '.$row['avatar'].' '.$row['eleves_id']."<br>";
    }







