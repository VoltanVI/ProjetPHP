<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>ProjetPHP</title>

    <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">

    </script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="../assets/css/cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg bg-secondary">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">HurJet</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end justify-content-center">
                <a class="nav-link text-light" href="../index.html">Accueil</a>
                <a class="nav-link active text-light" href="#">Vol</a>
                <a class="nav-link text-light" href="../vue/contact.html">Contact</a>
                <a class="nav-link text-light" href="saisi.html">Saisir</a>
                <a class="nav-link text-light" href="update.html">Modifier</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <a class="text-light btn btn-outline-secondary" href="connexionUser.php">Connexion</a>

            </nav>
        </div>
    </header>
    <h2>Tableau de vol</h2>
    <main class="px-3">
        <?php
        require_once '../src/bdd/Bdd.php';
        $bdd = new Bdd();
        $req = $bdd->bdd()->prepare('SELECT * FROM vol');
        $req->execute();

        ?>
        <table id="tableau" style="width:100%" class="cell-border">
            <thead>
            <tr>
                <th>Identifiant du vol</th>
                <th>Date de départ</th>
                <th>Heure de départ</th>
                <th>Heure d'arrivee</th>
                <th>Reference pilote</th>
                <th>Reference avion</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($value = $req->fetch()){
                ?>
                <tr class="bg-secondary ">
                    <th><?php echo $value['id_vol'] ?></th>
                    <th><?php echo $value['date_depart'] ?></th>
                    <th><?php echo $value['heure_depart'] ?></th>
                    <th><?php echo $value['heure_arrivee'] ?></th>
                    <th><?php echo $value['ref_pilote'] ?></th>
                    <th><?php echo $value['ref_avion'] ?></th>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </main>
    <br><br>
    <?php

    $request = $bdd->bdd()->prepare('SELECT * FROM pilote');
    $request->execute();

    ?>
    <p>ID Nom Prenom</p>
    <select>

        <?php while($val = $request->fetch()){ ?>
            <option><?php echo $val['id_pilote'].' '.$val['nom'].' '.$val['prenom'] ?></option>
        <?php  }   ?>
    </select>

    <footer class="mt-auto text-white-50">

    </footer>
</div>


</body>
<script>
    $(document).ready( function () {
        $('#tableau').DataTable();
    } );
</script>
<script>
    "dependencies": {
        "select2": "~4.0"
    }
</script>
</html>
