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
        <title>Fantacalcio | vediPiani</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
    </head>

    <body style="background-color:	#f5f5dc">
  <?php require_once(__DIR__.'\navbar.php'); ?>

  <div class="container">
    <div class="row mt-5">
   <h2> Utenti:</h2>
    <br><br>
    <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                        <th scope="col">Nome</th>
                            <th scope="col">Cognome</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
     include_once dirname(__FILE__) . '/../function/user.php';
     $player_arr = getArchiveUser();
        if (!empty($player_arr) && $player_arr != -1) {
           foreach ($player_arr as $row) {
               echo ('<tr>');
               foreach ($row as $cell) {
                     //ogni elemento della riga è finalmente una cella
                   echo ('<td>' . $cell . '</td>');
            }
           }
           echo('</tbody>'); 
           echo ('</table>');
           echo('</ul>
           </div>
           <br>');
           echo('<a href="index.php" class="btn btn-outline-primary ms-auto p-2">torna a home</a>');
    }
?>
    </div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>