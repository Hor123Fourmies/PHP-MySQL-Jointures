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
$listeEleves = "SELECT * FROM `WB-eleves` as e LEFT JOIN `WB-eleves-infos` as ei ON (ei.eleves_id = e.id)";

$result = $conn->query($listeEleves);
echo $conn->error;

while ($row = $result->fetch_assoc()) {
    echo "<a href = 'index2.php'>Nom : </a>".$row['nom']."<br>";
    echo "Prénom : ".$row['prenom']."<br>";
    echo 'Login :  '.$row['login']."<br>";
    echo "Mot de passe : ".$row['password']."<br>";
    echo 'Age : '.$row['age'] .' '.'ans'."<br>".$row['ville']."<br>".'Surnom : '.$row['avatar']."<br>"."ID de l'élève :".$row['eleves_id']."<br>";
    echo "<br><br>";
}




