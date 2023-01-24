<?php 
include 'database.php';

$verwijder_id = $_GET['id'];
$sql = "DELETE FROM telaat  WHERE ID = '$verwijder_id'";

$exe = getData($sql, 'POST');

header('location: index.php');
?>