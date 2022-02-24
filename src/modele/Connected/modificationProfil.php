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
                <a class="nav-link text-light" href="../../../index.html">Accueil</a>
                <a class="nav-link text-light" href="volCo.php">Vol</a>
                <a class="nav-link text-light" href="contactCo.html">Contact</a>
                <a class="nav-link text-light" href="saisiCo.html">Saisir</a>
                <a class="nav-link text-light" href="updateCo.php">Modifier</a>
                <a class="nav-link text-light" href="deleteCo.php">Supprimer</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <a class="text-light btn btn-outline-secondary" href="#">Connexion</a>
            </nav>
        </div>
    </header>

    <main class="px-3">
    <h3>Modifier le profil</h3>
        <form action="../../traitement/modifUser.php" method="post">
           ID : <select name="id">
                <?php
                require_once '../../../src/bdd/Bdd.php';
                $bdd = new Bdd();
                $req = $bdd->bdd()->prepare('SELECT * FROM user');
                $req->execute();
                while($val = $req->fetch()){ ?>
                    <option><?php echo $val['id_user']?></option>
                <?php  }
                $_POST['id_user'] = $val['id_user'];
                ?>
            </select>
            <br><br>
            Nouveau nom<br><br>
            <input type="text" name="newnom" class="form-control" placeholder="Nom"><br><br>
            Nouvel identifiant<br><br>
            <input type="email" name="newlogin" class="form-control" placeholder="Identifiant"><br><br>
            Nouveau mot de passe<br><br>
            <input type="password" name="newmdp" class="form-control" placeholder="Mot de passe"><br><br>
            <input type="submit" value="Valider">
        </form>
    </main>

    <footer class="mt-auto text-white-50">

    </footer>
</div>


</body>
</html>

