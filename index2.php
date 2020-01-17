<?php

$servername = "localhost";
$username = "id11175534_hor";
$password = "azerty";
$dbname = "id11175534_newbase";

$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);

$competences = "SELECT * FROM `WB-eleves`as e LEFT JOIN `WB-eleves-competences` as ec ON (ec.eleves_id = e.id)";
$result = $conn->query($competences);
echo $conn->error;

while ($row = $result->fetch_assoc()) {
    echo "Nom : ".$row['nom']."<br>";
    echo "Prénom : ".$row['prenom']."<br>";
    echo "Humour : ".$row['humour'] ."<br>"."Créativité : ".$row['creativite']."<br>";
    echo "<br><br>";
}
