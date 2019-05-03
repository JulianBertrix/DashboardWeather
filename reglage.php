<!DOCTYPE html>
    <html lang="fr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Weather</title>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" href="./Assets/CSS/stylesheet.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Dashboard Weather</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./reglage.php">Reglage</a>
                </li>
                </ul>
            </div>
        </nav>
        <br>
        
        <div class="container">
            <div class="row">
                <div class="card formCard">
                    <form>
                        <div class="form-group">
                            <label for="city">Ville: </label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="New York, Paris, Madrid ...">
                            <small class="form-text text-muted">pensez aux majuscules</small>
                        </div>
                        <div class="text-center">
                            <button type="submit text-center" class="btn btn-info" onclick="createCity()">Ajouter</button>
                        </div>
                    </form>
                </div>
                <?php
                    include "./Assets/PHP/reglageWeather.php";
                ?>
            </div>
        </div>
        <script type="text/javascript" src="./Assets/JS/functions.js"></script>
    </body>
<p><?php 

?></p>