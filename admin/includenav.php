<?php

echo '<div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
                <li><a href="../index.php">ACCUEIL</a></li>
                <li><a href="../catalogue.php?order=article_description&debut=0&limit=50">CATALOGUE</a></li>
                <li><a href="../form_budget.php">VOTRE BUDGET</a></li>
                <li class="active"><a href="gestion.php">ADMIN</a></li>
                <li id="seaa">
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>';

