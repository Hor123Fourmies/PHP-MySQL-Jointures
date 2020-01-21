<?php

echo 'Bonjour 1';
echo '<br><br>';

// $id_eleve = $_GET['id_eleve'];
// echo $id_eleve;

$servername = "localhost";
$username = "id11175534_hor";
$password = "azerty";
$dbname = "id11175534_newbase";

$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);

$competences = "SELECT * FROM `WB-eleves-competences` as ec LEFT JOIN `WB-competences` as c ON (ec.competences_id = c.id) WHERE eleves_id = '1'";
$result = $conn->query($competences);
echo $conn->error;

while ($row = $result->fetch_assoc()) {
    echo "ID de l'élève : ".$row['eleves_id']."<br>";
    echo "Compétence : ".$row['titre']."<br>";
    echo "Niveau : ".$row['niveau']."<br>";
    echo "Niveau auto-évalué : ".$row['niveau_ae']."<br>";
    echo "<br>";
}