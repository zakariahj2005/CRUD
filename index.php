<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Overzicht studenten te laat in de les</title>
    <style>
        .telaat{
            text-align:center; 
            color:#f00; 
            font-weight:bold;
        }
        .ergtelaat{
            text-align:center; 
            color:#fff; 
            background-color: #f00;
            font-weight:bold;
        }


    </style>
</head>
<body>
    <main style="width: 900px; margin: 20px auto;">
                <h4>Overzicht studenten die te laat waren</h4>
        <table class="table table-striped">
            <tr>
                <th nowrap>Naam student</th>
                <th>Klas</th>
                <th nowrap>Minuten te laat</th>
                <th>Reden te laat</th>
                <th></th>
            </tr>

        <br>
        <a href="nieuw.php" class="btn btn-success">W&eacute;&eacute;r eentje te laat!</a> 

        <?php
        $sql= "SELECT * FROM telaat";
        $studenten = getData($sql, 'fetchAll');
        
        foreach($studenten as $student){
            echo'<tr>';
            echo'<td>' . $student['naam'] . "</td>";
            echo'<td>' . $student['klas'] . "</td>";
            echo'<td>' . $student['minuten'] . "</td>";
            echo'<td>' . $student['reden'] . "</td>";
            echo'<td>' . $student['id'] . "</td>";
            echo"<td><a href='verwijder.php?id={$student['id']}'  class='btn btn-danger onclick='return confirm(\"Are you sure to delete?\")'>Delete</a></td>";
            echo  "<td><a href='update.php?id={$student['id']}' class='btn btn-success'>update</a></td>";
        }

        ?>


        <br><br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th rowspan="2">Statistieken</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Hoogste aantal minuten te laat</td>
            <td>120</td>
        </tr>
        <tr>
            <td>Gemiddeld aantal minuten</td>
            <td>31.3333</td>
        </tr>
        <tr>
            <td>Totaal aantal minuten</td>
            <td>188</td>
        </tr>
    </tbody>
</table>
<br><br><br>

    </main>

</body>

</html>