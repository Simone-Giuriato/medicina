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
        <title>Piano di Studi | Aggiungi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
    </head>

    <body>
  <?php require_once(__DIR__.'\navbar.php'); ?>

  <div class="container">
    <div class="row mt-5">
      <h2>Crea un nuovo Piano di Studi</h2>
    </div>
        <form method="post" style="margin-top: 20px;">
            <div class="mb-3">
                <label for="name" class="form-label"><b>Codice</b></label>
                <input type="text" class="form-control" placeholder="Codice..." name="codice" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label"><b>Nome</b></label>
                <input type="text" class="form-control" placeholder="Nome..." name="nome" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label"><b>CFU totali</b></label>
                <input type="text" class="form-control" placeholder="CFU..." name="cfu" required>
            </div>
            <button type="submit" class="btn btn-outline-success" name="legha">Conferma</button>
        </form>
            <?php

include_once dirname(__FILE__) . '\..\function\piano.php';
$err = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['codice'])|| !empty($_POST['nome'])||!empty($_POST['cfu'])) {
      $data = array(
        "codice"  => $_POST ['codice'],
        "nome"  => $_POST ['nome'],
        "cfu"  => $_POST ['cfu'],
        );
          $response =(array) addPiano($data);
          if (!empty($response)){
               echo ('<p class="text-success fw-bold mt-3 ms-3">' . $response['Message'] . '</p>'); 
                   }
           }
        }
?>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>