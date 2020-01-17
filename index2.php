<?php

$servername = "localhost";
$username = "id11175534_hor";
$password = "azerty";
$dbname = "id11175534_newbase";

$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);


$competences = "SELECT * FROM `WB-eleves-competences`as ec LEFT JOIN `WB-competences` as c ON (c.id = ec.id)";
$result = $conn->query($competences);
echo $conn->error;

while ($row = $result->fetch_assoc()) {
    echo $row['eleves_id']."<br>";
    echo "Compétence : ".$row['titre']."<br>";
    echo "<br>";
    
}
