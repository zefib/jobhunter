<?php 
$queryPro = $conn->prepare("SELECT * FROM profile WHERE userid = ?");
$GetId = $_SESSION['JHUserid'];
$queryPro->execute(array($GetId));
$ResultsPro = $queryPro->fetch();
?>