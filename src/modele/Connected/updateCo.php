<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>ProjetPHP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">



    <!-- Bootstrap core CSS -->
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../../../assets/css/cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>

            <h3 class="float-md-start mb-0">HurJet</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end justify-content-center">
                <a class="nav-link text-light" href="indexCo.html">Accueil</a>
                <a class="nav-link text-light" href="volCo.php">Vol</a>
                <a class="nav-link text-light" href="contactCo.html">Contact</a>
                <a class="nav-link text-light" href="saisiCo.html">Saisir</a>
                <a class="nav-link active text-light" href="#">Modifier</a>
                <a class="nav-link text-light" href="deleteCo.php">Supprimer</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <a class="text-light btn btn-outline-secondary" href="espaceMembre.php">Connexion</a>

            </nav>
        </div>
    </header>
    <div><br>
        <h2>Mise a jour d'un vol</h2>

        <p>Selectionner l'ID du vol a modifier</p>

        <form action="../../traitement/updateVol.php" method="post">

            <select name="id_vol">
                <?php
                require_once '../../../src/bdd/Bdd.php';
                $bdd = new Bdd();
                $req = $bdd->bdd()->prepare('SELECT * FROM vol');
                $req->execute();
                while($val = $req->fetch()){ ?>
                    <option><?php echo $val['id_vol']?></option>
                <?php  }
                $_POST['id_vol'] = $val['id_vol'];
                ?>
            </select>

            <br><br>
            Date de départ<br><br>
            <input type="date" name="ddepart" class="form-control"><br><br>
            Heure d'arrivée<br><br>
            <input type="time" name="hdepart" class="form-control"><br><br>
            Heure de départ<br><br>
            <input type="time" name="harrivee" class="form-control"><br><br>
            Reference Pilote<br><br>
            <input type="number" name="rpilote" class="form-control"><br><br>
            Reference Avion<br><br>
            <input type="number" name="ravion" class="form-control"><br><br>
            <input type="submit" value="Valider">

        </form>
    </div>
    <footer class="mt-auto text-white-50">

    </footer>
</div>


</body>
</html>
