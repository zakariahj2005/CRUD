<?php 
include 'database.php';

print_r($_POST);
$update_id = $_POST['id'];
$naam = $_POST['naam_student'];
$klas = $_POST['klas'];
$minuten = $_POST['aantal_minuten'];
$reden = $_POST['reden_student'];

$sql = "UPDATE `telaat` SET `naam` = '$naam', `klas` = '$klas', `minuten` = '$minuten', `reden` = '$reden' WHERE `telaat`.`id` = 19";
echo "<br>".$sql."<br>";
$exe = getData($sql, 'POST');

header('location: index.php');
?>