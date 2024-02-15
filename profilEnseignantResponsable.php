<?php
session_start();
if( !isset($_SESSION['IDEnseignant'])and $_SESSION['statu']==0)
{
  header("location:LoginEnseignant.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width,initial-scale=1"/>
    <title>Document</title>
    
    <link href="fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
    a:hover
      {
   
        background-color: green;
        border-radius: 30px;
        text-align: center;
        width: 50%;
        color: beige;
        color-adjust:unset;
        font-weight: bold;
        font-size: larger;
      }
      </style>
</head>
<body>
<nav class="navbar navbar-dark bg-success fixed-top"  style="color: green;">
  <div class="container-fluid ">
  <a class="navbar-brand" href="#"><i class="bi bi-person-check-fill"></i><p><?php if(isset($_SESSION['IDEnseignant'])) { echo $_SESSION['prenom'].' '.$_SESSION['nom'];}?></p></a>
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
          <li class="nav-item"  >
            <a class="nav-link active text-success " aria-current="page" href="Annonces.php">Annonce</a>
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
 
<!-- Page content -->
<div class="">
<section class="bannerPensei d-flex justify-content-center align-items-center w-100 ">
    <div class="container-fluid">
      <div class="row ">
        <div class="dive col-lg-6 mt-5">
            <div class="row ">
              <div id="titreflottant"class="col-lg-12"><h1>Gestion Des Etudiants</h1></div>
            </div>
          <a href="traitement/listeEtudiant.php" class="  bouton btn btn-lg btn-outline-primary">VOIR La Liste Des Etudiants</a>
          <a href="traitement/ApprouverDemande.php" class=" bouton btn btn-lg btn-outline-success">Approuver demande des Etudiants</a>
          <a href="#" class=" bouton btn btn-lg btn-outline-warning"></a>
          <a href="traitement/traitementSuppressionEtudiant.php" class=" bouton btn btn-lg btn-outline-danger">SUPPRIMER Etudiant</a>
        </div>
        <div class="dive col-lg-6 mt-5">
          <div class="row">
              <div id="titreflottant"class="col-lg-12"><h1>Gestion Des Cours</h1></div>
          </div>
          <a href="ListeDesCours.php" class="  bouton btn btn-lg btn-outline-primary">Voir La Liste Des COURS</a>
          <a href="AjoutCours.php" class=" bouton btn btn-lg btn-outline-success">AJOUTER COURS</a>
          <a href="ModifierCours.php" class=" bouton btn btn-lg btn-outline-warning">MODIFIER COURS</a>
          <a href="SupprimerCours.php" class=" bouton btn btn-lg btn-outline-danger">SUPPRIMER COURS</a>
        </div>
       
      </div>
        <div class="dive col-lg-6"style="margin-left: 280px;">
          <a href="profilEnseignant.php" class=" bouton btn btn-lg btn-outline-warning">GESTION RESSOURCES</a>
        </div>
    </div>
  </section>
</div>


<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>

</body>
</html>