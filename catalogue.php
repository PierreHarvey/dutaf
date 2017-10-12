<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site web de Dutaf">
    <meta name="author" content="Pierre HARVEY">

    <title>Dutaf | Notre Catalogue</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">
th {text-align: center;}
</style>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Dutaf</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="index.php">ACCUEIL</a></li>
                <li class="active"><a href="catalogue.php?order=article_description&debut=0&limit=50">CATALOGUE</a></li>
                <li><a href="form_budget.php">VOTRE BUDGET</a></li>
                <li><a href="admin/gestion.php">ADMIN</a></li>
                <li id="seaa">
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<!-- *****************************************************************************************************************
 BLUE WRAP
 ***************************************************************************************************************** -->
<div id="blue">
    <div class="container">
        <div class="row">
            <h3>Catalogue</h3>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /blue -->

<div class="container">
            <div class="row">
            <div class="col-sm-12 text-center">

        <a href="#footer2"> Bas de page</a> <br> <br> <br>
        <div id="#top"></div>

    	<?php

    	include ('config.inc.php');
		$bdd = new PDO('mysql:host='.BDD_SERVEUR.';dbname='.BDD_BDD.';charset=utf8',BDD_USER,BDD_PASS);

        $requete = 'SELECT * FROM catalogue';
		$exe = $bdd->query($requete);

        

echo            '<table class="table">
                <tr><th>Id</th>
                <th>Designation</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th></tr>';

                while($ligne = $exe->fetch())
                {

                    echo'<tr>
                        <td>'.$ligne['art_id'].'</td>
                        <td>'.$ligne['art_design'].'</td>
                        <td>'.$ligne['art_desc'].'</td>
                        <td>'.number_format($ligne['art_prix'], 2).' €</td>
                        <td>'.$ligne['art_quant'].'</td>
                    </tr>';
                }

                echo '<div id="footer2"> <a href="#top"> Haut de page </a> <br> <br></div>';
?>



   
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/retina-1.1.0.js"></script>
<script src="./js/jquery.hoverdir.js"></script>
<script src="./js/jquery.hoverex.min.js"></script>
<script src="./js/jquery.prettyPhoto.js"></script>
<script src="./js/jquery.isotope.min.js"></script>
<script src="./js/custom.js"></script>


</body>



</html>			