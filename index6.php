<?php


$id_eleve = $_GET['id_eleve'];
//echo $id_eleve;

$servername = "localhost";
$username = "id11175534_hor";
$password = "azerty";
$dbname = "id11175534_newbase";

$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);

$competences = "SELECT * FROM `WB-eleves-competences` as ec LEFT JOIN `WB-competences` as c ON (ec.competences_id = c.id) WHERE eleves_id = $id_eleve";
$result = $conn->query($competences);
echo $conn->error;

while ($row = $result->fetch_assoc()) {
    echo "ID de l'élève : " . $id_eleve . "<br>";
    echo "Compétence : " . $row['titre'] . "<br>";
    echo "Niveau : " . $row['niveau'] . "<br>";
    echo "Niveau auto-évalué : " . $row['niveau_ae'] . "<br>";
    echo "<br>";
}



?>

<script src="Chart.js"></script>
<script src="script.js"></script>
