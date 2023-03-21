
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sandwech | Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
    </head>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ricerca di medicina</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ciao.php">Homepage</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Attivitá formative
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mostra Attivitá formative</a></li>
            <li><a class="dropdown-item" href="#">Modifica Attivitá formative</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Unitá didattiche
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mostra Unitá didattiche</a></li>
            <li><a class="dropdown-item" href="#">Modifica Unitá didattiche</a></li>
          </ul>
        </li>
        <?php
                                            include_once dirname(__FILE__) . '/../function/user.php';
                                            $user = $_SESSION['user_id'];
                                            $privilage = getAutentication($user);
                                            if($privilage == "admin"){
                                                echo('   
                                            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Utenti
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="addUtenti.php">Aggiungi Utenti</a></li>
                        <li><a class="dropdown-item" href="visualizzaUtenti.php">Visualizza Utenti</a></li>
                    </ul>
                </li>');
                                            }
                                            
                                            
                        ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</html>