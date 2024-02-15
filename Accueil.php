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
      .dd{
        font-size: 4rem;
  display: inline-block;
  animation: move 3s ease-in-out infinite;
}

@keyframes move {
  0% {
    transform: translate(-30%, 0);
  }
  50% {
    text-shadow: 0 25px 50px rgba(0, 0, 0, 0.75);
    background-color: green;
    box-sizing: border-box;
    font-weight: lighter;
    font-style: oblique;
    border-radius: 20px 50px 50px 20px;
 
  }
  80% {
    transform: translate(30%, 0);
    background-color: beige;
    color: green;
  }

}
img
{
  padding: 10px;
 display: flex;

}

.card-body
{
  
  font-size: large;
  font-style: italic;
  
  
}
.card-body h1
{
  font-weight: lighter;
  font-size: xx-large;
  text-decoration:underline;
  background-color:green;
  text-transform: uppercase;
  color:burlywood;
text-align: center;
border-radius:30px;
}
p marquee
{
   text-align: center;
  
}
    </style>

  
</head>
<body>
  
<nav class="navbar fixed-top navbar-expand-lg text-light justify-content-center" style="background-color:green">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="Accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="LoginEnseignant.php">Espace Enseignant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="etudiant.php">Espace Etudiant</a>
                </li>
              
            </ul>
           
        </div>
    </div>
</nav>

<div id="content">
  <section class="banner pt-5 d-flex justify-content-center align-items-center">
    <div class="container my-5 ">
      <div class="row">
        <div class="col-lg-6 dd">
          <h1 class="text-capitalize banner-desc">faculte des Sciences et Techniques<br>Departement Mathematiques-Informatique</br>Section Informatique</h1>
        </div>
        <div class="col-lg-6 ">
          
        </div>
        </div>
      </div>
  </section>

  <section class="section2 ">
    <div class="container d-flex">
      <div class="row">
        
        <div class="card mb-3 border-0">
          <div class="row">
            <div class="col-md-6">
              <div class="card-body ">
                <h1 class="card-title">nos formations</h1>
                <p class="card-text" style="margin-top:20px; font-size:larger"> <marquee scrolldelay="50">-Logiciels informatiques<br>-Sécurité informatique et des réseaux<br>-Réseaux informatiques<br>-Télécommunications<br>-Business intelligence<br>-Systémes d'information répartis<br>Bioinformatique </marquee></p>
                
              </div>
            </div>
            <div class="col-md-6">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="form.jpg" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imageAdmin/slide2.jpg" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imageAdmin/slide3.jpg" class="d-block w-100 img-fluid " alt="...">
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3 border-0" style="margin-top: 60px;">
          <div class="row">
          <div class="col-md-6">
              <img src="propos.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h1 class="card-title">A propos de Nous</h1>
                <p class="card-text">

La section informatique de l’Université Cheikh Anta Diop de Dakar est un institut de formation public,privée dans les filières de l'informatique qui a ouvert ses portes depuis 1990.</br>

Secteurs<br>
    Services de recherche <br>
Taille de l’entreprise<br>
    11-50 employés <br>
Siège social:<br>
    Dakar <br>
Type:<br>
    Établissement éducatif <br>
Fondée en
    1990 
Domaines
   

</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
</div>
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5 ">

  <footer class="text-center text-white" style="background-color:beige;">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Images -->
      <section class="">
        <div class="row justify-content-center align-items-center h-50">
          <h1 style=" font-size:xx-large;color:green; text-decoration:underline; box-shadow:green;" >Liens utils</h1>
          <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
           
              <a href="http://bibnum.ucad.sn/greenstone/cgi-bin/library.cgi?site=localhost&a=p&p=about&c=theses&l=fr&w=utf-8">
                <div
                     class="mask"
                     style="background-color: rgba(251, 251, 251, 0.2);"
                     > <div
                 class="bg-image hover-overlay ripple shadow-1-strong rounded"
                 data-ripple-color="light"
                 >
              <img
                   src="bu.jpg"
                   class="w-100"
                   /></div>
              </a>
            </div>
          </div>
          <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          
              <a href="https://fad.fst.ucad.sn/">
                <div
                     class="mask"
                     style="background-color:beige;"
                     >  <div
                 class="bg-image hover-overlay ripple shadow-1-strong rounded"
                 data-ripple-color="light"
                 >
              <img
                   src="fac.jpg"
                   class="w-100"
                   /></div>
              </a>
            </div>
          </div>
          <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
           
              <a href="https://www.ucad.sn/">
                <div
                     class="mask"
                     style="background-color: rgba(251, 251, 251, 0.2);"
                     > <div
                 class="bg-image hover-overlay ripple shadow-1-strong rounded"
                 data-ripple-color="light"
                 >
              <img
                   src="ucad.jpg"
                   class="w-100"
                   /></div>
              </a>
            </div>
         
          </div>
          <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          
          <a href="https://www.linkedin.com/company/section-informatique-ucad/?originalSubdomain=sn">
            <div
                 class="mask"
                 style="background-color:beige;"
                 >  <div
             class="bg-image hover-overlay ripple shadow-1-strong rounded"
             data-ripple-color="light"
             >
             <i class="bi bi-linkedin w-100"></i>
          </a>
        </div>
        </div>
      </section>
      <!-- Section: Images -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color:green;font-size:larger">
      © 2022 Copyright:
      <a class="text-white" href="#">Faty&Saliou</a>
    </div>
    <!-- Copyright -->
  </footer>

</div>
<!-- End of .container -->

</body>
</html>