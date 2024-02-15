<?php
if(isset($_SESSION['idAdmin']))
{
  header("location:LoginAdmin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   
    <script language="javascript">
         function f(){
            alert("Vous avez bien cliqué sur le bouton!");
         }
    </script>
    <style>
      .dd{
        font-size: 5rem;
  display: inline-block;
  animation: move 3s ease-in-out infinite;
}

@keyframes move {
  0% {
    transform: translate(-30%, 0);
  }
  50% {
    text-shadow: 0 25px 50px rgba(0, 0, 0, 0.75);
  }
  100% {
    transform: translate(30%, 0);
  }
}

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
   
  
</head>
<nav class="navbar navbar-dark bg-success fixed-top"  style="color: green;">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"><i class="bi bi-person-check-fill"><p style="margin-bottom: 0px;">Admin</p></i></a>
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
            <a class="nav-link active text-success " aria-current="page" href="PageEnseignants.php">Gestion des Enseignants</a>
          </li>
          <li class="nav-item"  >
            <a class="nav-link active text-success " aria-current="page" href="pageClasse.php">Gestion des Classe</a>
          </li>
         
         
         
        <ul class="navbar-nav navbar-right" >
            <li class="nav-item">
                    <a class="nav-link btn btn-outline-danger text-success " href="deconnexionAdmin.php">Deconnexion</a>
                </li>
            </ul>
      </div>
    </div>
  </div>
</nav> 
<!-- Page content -->
<div class="">
<a class="navbar-brand" href="#"><i class="bi bi-person-check-fill"></i><p>Admin</p></a>
<section class="banner pt-5 d-flex justify-content-center align-items-center">
    <div class="container my-5 py-2">
        <div class="row">
          <div class="col-lg-6 dd ">
            <h1 class="text-capitalize py-3 banner-desc" >plateforme  de partage<br>des Ressources Pedagogiques<br>a la Section Informatique de l`UCAD</h1>
          </div>
          <div class="col-lg-6 py-5">
            <div class="boutonAdmin ">
              <a href="PageEnseignants.php" class=" bouton btn btn-lg btn-outline-primary ">Gestion des Enseignants</a>
            </div>
            <div class="boutonAdmin">
              <a href="Classe.php"class=" bouton btn btn-lg  btn-outline-warning">Gestion des Classes et leur Responsable</a>
            </div>     
          </div>
      </div>
    </div>
</section>

<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    }
    
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  </body>
</html>