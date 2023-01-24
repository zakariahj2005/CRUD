<?php
include "database.php";

$name=$_POST['naam'];
$klas=$_POST['klas'];
$minuten=$_POST['minuten'];
$reden=$_POST['reden'];

$sql = "INSERT INTO telaat (naam, klas, minuten, reden) VALUES ('$name', '$klas', '$minuten', '$reden')";
$exe = getData($sql, 'POST');

header("location:index.php");
?>
