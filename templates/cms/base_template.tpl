<!doctype html>
<html lang="pl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" type="text/css" href="public/css/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <script src="https://kit.fontawesome.com/752157b47f.js" crossorigin="anonymous"></script>
    <title>BeSmartCMS</title>
</head>
<body>
<nav id="cms-nav">
    <div class="card border-secondary no-radius">
        <div class="card-header ">BeSmartCMS</div>
    </div>
    <ul class="list-group">
        <li class="list-group-item list-group-item-action cms-nav-item no-radius active">
            <i class="fas fa-file-alt"></i>Strony
        </li>
        <li class="list-group-item list-group-item-action cms-nav-item no-radius">
            <i class="fas fa-palette"></i>Wygląd
        </li>
        <li class="list-group-item list-group-item-action no-radius cms-nav-item">
            <i class="fas fa-tools"></i>Ustawienia
        </li>
        <li class="list-group-item list-group-item-action no-radius cms-nav-item">
            <i class="fas fa-user-friends"></i>Użytkownicy
        </li>
        <li class="list-group-item list-group-item-action no-radius cms-nav-item">
            <i class="fas fa-tasks"></i>SEO
        </li>
    </ul>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12 ml-auto mr-auto mt-5">
            <div id="first-configuration-container">
                {block "firstUseContainer"}{/block}
            </div>
        </div>
    </div>
</div>



<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.js"></script>
<script src="public/js/first_use.js"></script>
<script src="public/js/jquery-ui.js"></script>
</body>
</html>