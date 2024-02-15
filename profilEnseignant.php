<?php
if(!empty($_SESSION['statu']) and$_SESSION['statu']==1)
{
  header("location:LoginEnseignant.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
      a:hover
      {
   
        background-color: green;
        border-radius: 30px;
        text-align: center;
        width: 50%;
        color: beige;
        color-adjust:unset;
      }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark bg-success fixed-top"  style="color: green;">
  <div class="container-fluid ">
  <a class="navbar-brand" href="#"><i class="bi bi-person-check-fill"></i><p><?php if(isset($_SESSION['IDEnseignant']) and isset($_SESSION['nom']) and isset($_SESSION['prenom'])) { echo $_SESSION['prenom'].' '.$_SESSION['nom'];}?></p></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><i class="bi bi-list"></i>Menu de Navigation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body"style="color: green;" >
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" >
        <li class="nav-item"  >
            <a class="nav-link active text-success "  aria-current="page" href="Accueil.php">Home</a>
          </li>
          <li class="nav-item"  >
            <a class="nav-link active text-success " aria-current="page" href="">Gestion des Ressources</a>
          </li>
          <li class="nav-item"  >
            <a class="nav-link active text-success " aria-current="page" href="historique.php">Historique</a>
          </li>
         
         
         
        <ul class="navbar-nav navbar-right" >
            <li class="nav-item">
                    <a class="nav-link btn btn-outline-danger text-success " href="deconnexionRES.php">Deconnexion</a>
                </li>
            </ul>
      </div>
    </div>
  </div>
</nav> 


<div class="">
<section class="bannerPensei d-flex justify-content-center align-items-center w-100">
    <div class="container-fluid ">
    <div class="row">
      </div>
      <div class="row ">
        <div class="diveProEnsei col-lg-10">
        <a href="ListeDesRessources.php" class="  bouton btn btn-lg btn-outline-info">Tous les ressources</a>
          <a href="AjoutRessources.php" class="  bouton btn btn-lg btn-outline-primary">Ajouter ressources</a>
          <a href="ModifierRessources.php" class=" bouton btn btn-lg btn-outline-success">Modifier ressources</a>
          <a href="SupprimerRessource.php" class=" bouton btn btn-lg btn-outline-warning">Supprimer ressources</a>
      </div>
    </div>
  </section>
</div>
<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>
    
</body>
</html>