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
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="../../assets/css/cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>

            <h3 class="float-md-start mb-0">HurJet</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end justify-content-center">
                <a class="nav-link text-light" href="../../index.html">Accueil</a>
                <a class="nav-link text-light" href="vol.php">Vol</a>
                <a class="nav-link text-light" href="contact.html">Contact</a>
                <a class="nav-link text-light" href="saisi.html">Saisir</a>
                <a class="nav-link text-light" href="update.php">Modifier</a>
                <a class="nav-link text-light" href="delete.php">Supprimer</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <a class="text-light btn btn-outline-secondary" href="#">Connexion</a>
            </nav>
        </div>
    </header>

    <main class="px-3">

        <form action="../traitement/mail.php" method="post">

            Nom<br><br>
            <input type="text" name="nom" class="form-control" placeholder="Nom"><br><br>
            Adresse Electronique<br><br>
            <input type="email" name="login" class="form-control" placeholder="Email"><br><br>
            Mot de passe<br><br>
            <input type="password" name="mdp" class="form-control" placeholder="Mot de passe"><br>
            <p><strong>Un mail vous seras envoyer apres votre inscription</strong></p><br>
            <input type="submit" value="Valider">
        </form>
        <br><br>

        <p>D??ja inscrit, <a href="connexionUser.php">connexion</a></p>
    </main>

    <footer class="mt-auto text-white-50">

    </footer>
</div>


</body>
</html>

