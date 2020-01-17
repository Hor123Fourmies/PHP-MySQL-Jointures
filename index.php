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
SELECT * FROM eleves LEFT JOIN animaux ON (animaux.nom = chat) WHERE 1
SELECT * FROM eleves LEFT JOIN animaux ON (animaux.id_eleve = eleves.id) WHERE 1

*/


$servername = "localhost";
$username = "id11175534_hor";
$password = "azerty";
$dbname = "id11175534_newbase";

$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);
$liste = "SELECT * FROM `WB-eleves` LEFT JOIN `WB-eleves-infos` ON (WB-eleves-infos.eleves_id = WB-eleves.id)";
$result = $conn->query($liste);

while ($row = $result->fetch_assoc()) {
    echo $row["prenom"]." ".$row["nom"]." ".$row["login"]." ".$row["password"]."<br>";
    echo $row["age"] ." "."ans"." ".$row["ville"]." ".$row["avatar"]." ".$row["eleves_id"]."<br>";
}





