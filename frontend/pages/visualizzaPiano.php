<?php

session_start(); 
if(empty($_SESSION['user_id'])){
    header('location: ../login.php'); 
}

?>
<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Piano di Studi |Vedi Piano</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
    </head>

    <body  style="background-color:	#f5f5dc">
  <?php require_once(__DIR__.'\navbar.php'); ?>

  <div class="container">
    <div class="row mt-5">
   <h2> Piani di studio:</h2>
    <br><br>
    <table class="table  table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Codice</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CFU</th>
                            <th scope="col">Settore</th>
                            <th scope="col">N_Settore</th>
                            <th scope="col">TAF_Ambito</th>
                            <th scope="col">Ore_Lezione</th>
                            <th scope="col">Ore_Laboratorio</th>
                            <th scope="col">Ore_Tirocinio</th>
                            <th scope="col">Tipo_Insegnamento</th>
                            <th scope="col">Semestre</th>
                            <th scope="col">Descrizione_Semestre</th>
                            <th scope="col">Anno1</th>
                            <th scope="col">Anno2</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
     include_once dirname(__FILE__) . '/../function/piano.php';
     $player_arr = getArchivePiano();
        if (!empty($player_arr) && $player_arr != -1) {
           foreach ($player_arr as $row) {
               echo ('<tr>');
               foreach ($row as $cell) {
                     //ogni elemento della riga corrisponde ad una cella
                   echo ('<td>' . $cell . '</td>');
            }
           }
           echo('</tbody>'); 
           echo ('</table>');
           echo('</ul>
           </div>
           <br>');
           echo('<a href="index.php" class="btn btn-primary ms-auto p-2">torna a home</a>');
    }
?>
    </div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>