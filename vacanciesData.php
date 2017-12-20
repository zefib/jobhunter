<?php 
$queryVac = $conn->prepare("SELECT * FROM vacancies");
$queryVac->execute();
$ResultsVac = $queryVac->fetchAll();
?>