<?php
include'database.php';
 
 ?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Weer een student te laat</title>
</head>
<?php
$update_id = $_GET['id'];
$sql ="SELECT * FROM telaat WHERE ID = $update_id";
$student = getData($sql , 'fetch');
?>



<body>
    <main style="width: 600px; margin: 20px auto;">
        <h4 style="text-align:center;">update melding te late student</h4>

        <form class="cursusform" method="post" action="">
            <div class="form-group">
                <label for="naam">Naam student</label>
                <input type="text" class="form-control" id="naam" name="naam" placeholder= <?php
                echo $student['naam'];?>
                 required>
                 
    
            </div>
            <div class="form-group">
                <label for="klas">Klas</label>

                <select class="form-control" id="klas" name="klas">
                    <option>9A</option><option>9B</option><option>9C</option><option>9D</option>                </select>
            </div>
            <div class="form-group">
                <label for="minuten">Aantal minuten te laat</label>


                <select class="form-control" id="minuten" name="minuten">
                    <option>5</option><option>10</option><option>15</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option><option>45</option><option>50</option><option>55</option><option>60</option>                </select>


            </div>
            <div class="form-group">
                <label for="reden">Reden te laat komen:</label>
                <textarea class="form-control" rows="5" id="reden" name="reden"><?php echo $student['reden']?></textarea>
            </div>
            <div>
                
                <input name="id" value="<?php echo $_GET['id']?>" type="hidden">
            </div>
            <button name ='submit'type="submit" class="btn btn-success">Opslaan</button>
            <button class="btn btn-success" onclick="location.href = 'index.php';">Home</button>


            
        </form>
    </main>
    <?php
    if(isset($_POST['submit'])){
$update_id = $_GET['id'];
$naam = $_POST['naam'];
$klas = $_POST['klas'];
$minuten = $_POST['minuten'];
$reden = $_POST['reden'];


$sql = "UPDATE `telaat` SET `naam` = '$naam', `klas` = '$klas', `minuten` = '$minuten', `reden` = '$reden' WHERE id = $update_id";
$exe = getData($sql, 'POST');

header("location:index.php");

    }
?>
</body>

</html>