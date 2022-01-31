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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg bg-secondary">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">HurJet</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end justify-content-center">
                <a class="nav-link text-light" href="index.html">Accueil</a>
                <a class="nav-link active text-light" href="#">Vol</a>
                <a class="nav-link text-light" href="contact.html">Contact</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <a class="text-light btn btn-outline-secondary" href="saisi.html">Commencer</a>
            </nav>
        </div>
    </header>
    <h2>Tableau de vol</h2>
    <main class="px-3">
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
            <?php //for    ?>
            <tr class="bg-secondary ">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="bg-black">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="bg-secondary">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="bg-black">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="bg-secondary">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="bg-black">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="bg-secondary">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="bg-black">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="bg-secondary">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="bg-black ">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>


            </tbody>
        </table>
    </main>

    <footer class="mt-auto text-white-50">

    </footer>
</div>


</body>
<script>
    $(document).ready( function () {
        $('#tableau').DataTable();
    } );
</script>
</html>
