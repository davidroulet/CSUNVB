<!DOCTYPE HTML>
<?php require_once "helpers.php"?>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

    <!-- Icons -->
    <link href="assets/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href="assets/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- Javascript de l'application -->
    <script src="js/global.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/shiftEnd.js"></script>
    <script src="js/stups.js"></script>
    <script src="js/todoList.js"></script>

</head>
<body>


<div class="container">
    <header>
        <div class="row banner">
            <img class="col-2" src="/assets/images/logo.png">
            <a href="index.php?action=<?php if ($_SESSION['username']['firstconnect'] == true){echo "login";}else{echo "home";}?>" class="col-10 text-center mt-5 text-decoration-none"><h1>CSU-NVB Groupe A1</h1><i>V5.0</i></a>
            <?php if (isset($_SESSION['username']) && $_SESSION['username']['firstconnect'] != true) { ?>
                <a href="?action=disconnect" class="btn btn-primary m-1 pull-right">Logout</a><p>Connecté en tant que : <strong><?=$_SESSION['username']['initials']?></strong> à <strong><?=getbasebyid($_SESSION["site"])["name"]?></strong></p>
            <?php } else { ?>
                <a href="?action=login" class="btn btn-primary m-1 pull-right">Login</a>
            <?php } ?>
        </div>
    </header>
</div>

    <div class="container">
        <?= getFlashMessage(); ?>
        <?= $content; ?>
    </div>
</body>
</html>
