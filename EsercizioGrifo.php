<?php require "connDB.php"; ?>
<!DOCTYPE html>
<html lang="it-IT">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Esercizio GrifoMultimedia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<style type="text/css">
  ul li {display: inline-block;}
  ul li:hover ul {display: block;}
  ul li ul {
    position: absolute;
    display: none;
  }
  ul li ul li { 
    display: block; 
  }
  ul li ul li a {display:block !important;} 
  .span{
    background-color: white;
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}
  .dropdown-item:hover{
    color: #b7232b;
  }

.btn-outline-danger {
    --bs-btn-color: #b7232b;
    --bs-btn-border-color: #b7232b;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #b7232b;
    --bs-btn-hover-border-color: #b7232b;
    --bs-btn-focus-shadow-rgb: 220,53,69;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #b7232b;
    --bs-btn-active-border-color: #dc3545;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #b7232b;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #b7232b;
    --bs-gradient: none;
}
</style>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid" style="padding: 10px;">
    <a class="navbar-brand" href="#">
      <img src="https://www.grifomultimedia.it/wp-content/uploads/2020/03/grifo-logo-1.png" alt="Logo" width="215" height="50" class="d-inline-block align-text-top" style="margin-right: 30px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
            Soluzioni
          </a>
          <ul class="dropdown-menu">
            <li class="liHover"><a class="dropdown-item" href="#">Digital Learning</a></li>
            <li class="liHover"><a class="dropdown-item" href="#">Gamification</a></li>
            <li class="liHover"><a class="dropdown-item" href="#">Servizi & Consulenza</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button"  aria-expanded="false">
            Azienda
          </a>
          <ul class="dropdown-menu">
            <li class="liHover"><a class="dropdown-item" href="#">Chi siamo</a></li>
            <li class="liHover"><a class="dropdown-item" href="#">Cosa facciamo</a></li>
            <li class="liHover"><a class="dropdown-item" href="#">Perchè scegliere Grifo</a></li>

            <li class="liHover"><a class="dropdown-item" href="#">L'innovazione è un gioco Serio</a></li>
            

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button"  aria-expanded="false">
            Risorse
          </a>
          <ul class="dropdown-menu">
            <li class="liHover"><a class="dropdown-item" href="#">Portfolio</a></li>
            <li class="liHover"><a class="dropdown-item" href="#">Case Study</a></li>
            <li class="liHover"><a class="dropdown-item" href="#">Progetti R&S</a></li>
            <li class="liHover"><a class="dropdown-item" href="#">Whitepaper</a></li>

          </ul>
        </li>
          
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contatti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <div align="center">
        <span class="span" style="padding-top: 20px;padding-right: 0px;padding-bottom: 20px;padding-left: 0px; font-size: xx-large; width: 100%; ">Stimolare l’engagement con la  <span style="color: #b7232b" class="underline custom">gamification </span>
    </div>
      <img src="https://www.grifomultimedia.it/wp-content/uploads/2019/10/slide-g4s-award.jpg" width="1900 px" height="900 px" alt="..." >
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <div align="center">
        <span class="span" style="padding-top: 20px;padding-right: 0px;padding-bottom: 20px;padding-left: 0px; font-size: xx-large;  width: 100%;"><span style="color: #b7232b" class="underline custom">Reskilling</span> &amp; Upskilling del personale</span>
    </div>
      <img src="https://www.grifomultimedia.it/wp-content/uploads/2022/11/lutechcase-1.jpg" width="1900 px" height="900 px" alt="..." >
    </div>
    <div class="carousel-item">
      <div align="center">
        <span class="span" style="padding-top: 20px;padding-right: 0px;padding-bottom: 20px;padding-left: 0px; font-size: xx-large;  width: 100%;"><span style="color: #b7232b" class="underline custom">Grifo Multimedia e Udemy:</span> partnership per arricchire le Corporate Academy</span>
    </div>
      <img src="https://grifomultimedia.it/wp-content/uploads/2023/06/partnership.jpg" width="1900 px" height="900 px" alt="..." >
    </div> 
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div id="aforismi" style="text-align: center;"><h1 style="color: #b7232b; text-align: center; "><p></p><strong>Aforismi</strong></h1>
   <span id="mySpan" translate="yes" style="padding-top: 20px;padding-right: 0px;padding-bottom: 20px;padding-left: 0px; font-size: larger;"></span>
</div>

<div class="row" align="center" style="padding-bottom: 60px; padding-top: 40px;">
    <div class="col-lg-4 col-sm-12">
      <button type="button" class="btn btn-outline-danger" style="width: 80%; height: 300px; box-shadow: 20px 20px 50px black;" ><h1 style="text-align: center;"><p></p><strong>Digital Learning</strong></button>
    </div>
    <div class="col-lg-4 col-sm-12">
      <button type="button" class="btn btn-outline-danger" style="width: 80%; height: 300px; box-shadow: 20px 20px 50px black;" ><h1 style="text-align: center;"><p></p><strong>Gamification</strong></button>
    </div>
    <div class="col-lg-4 col-sm-12">
      <button type="button" class="btn btn-outline-danger" style="width: 80%; height: 300px; box-shadow: 20px 20px 50px black;" ><h1 style="text-align: center;"><p></p><strong>Servizi & Consulenza</strong></button>
    </div>

</div>

<div class="row" align="center" style="background-color: lightgrey; padding-bottom: 5%;">
  <h1 style="color: #b7232b; text-align: center; "><p></p><strong>Azienda</strong></h1>
 <div class="col-lg-6" align="right"><br>
    <h2 style="line-height: 40px; font-size: 30px; text-transform: none; font-weight: 400;">Grifo è una Pmi innovativa che da oltre venti anni sviluppa soluzioni di e-learning &amp; gamification per l’empowerment delle persone e delle organizzazioni.</h2>
 </div>
 <div class="col-lg-6">
    <img src="https://grifomultimedia.it/wp-content/uploads/2019/11/grifo-azienda-animazione.gif" width="40%">
 </div>
 
 </div>

 <div class="row" align="center" style="background-color: whitesmoke;">
  <h1 style="color: #b7232b; text-align: center; "><p></p><strong>News</strong></h1>
 
 <?php 
  $String =  elencoNotizie();
  $stringArray = implode($String);
  $indiciSeparati = explode(";", $stringArray);
  for ($i=0; $i < count($String) ; ++$i) { 
        
        $cuttedString[$i] = explode(",", $indiciSeparati[$i]);
     ?>
       <div align="center" style="padding-bottom: 3%; ">
          
          <div class="card" style="width:40%">
            <div class="card-header" style="color: #b7232b;">
              <?php echo $cuttedString[$i][4]; ?>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $cuttedString[$i][2]; ?></h5>
              <p class="card-text"><?php echo $cuttedString[$i][3]; ?></p>
              <p class="card-text" style="margin-left: 260px"><?php echo $cuttedString[$i][0]."   ".$cuttedString[$i][1]; ?></p>
              <button type="button" class="btn btn-outline-danger" style="width: 30%"><strong>SCOPRI</strong></button>
            </div>
          </div>
        </div>
     <?php 
    } 
   ?>
 </div>
<div class="row">
 <div class="col-lg-4" style="height: 200px"></div>
  <div class="col-lg-4" align="center">
    <span  style="font-size: xx-large; width: 100%; ">Scrivici. ti contatteremo al  <br><span style="color: #b7232b" class="underline custom">più presto </span></span>
   <form>
     <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Nome e Cognome</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Email</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Oggetto</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Messaggio</span>
        <textarea type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></textarea>
    </div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Privacy Policy. Acconsento al Trattamento dei dati personali*
  </label>

  </div><br>
  <button type="button" class="btn btn-outline-danger" style="width: 30%"><strong>Invia</strong></button>
   </form><br>



 </div>
 <div class="col-lg-4"></div>
 </div>


<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Iscriviti alla newsletter e resta sempre aggiornato</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Indirizzo email</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Iscriviti
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Grifo multimedia Srl ©
      </p>
    </section>
    <!-- Section: Text -->
    <div class="row" align="center">
    <div class="col-lg-6 col-sm-12">
      <img src="https://www.grifomultimedia.it/wp-content/uploads/2020/03/grifo-logo-white-2.png" width="215" height="50"><br><br>
      <img src="https://www.grifomultimedia.it/wp-content/uploads/2019/12/Logo-Soges-Holding-Company.png" width="215" height="50">
    </div>
    <div class="col-lg-6 col-sm-12">
      <img src="https://www.grifomultimedia.it/wp-content/uploads/2020/12/grifo-mappa-italia.png">
    </div>
    

  </div>
    
  </div>
  <!-- Grid container -->

</footer>
<!-- Footer -->

<script type="text/javascript">
  var key = 'rsVaHIX0UwaQSEjzQ8y2Sg==bbuM4tzqwVEtT7eA';
  

  function Aforisma() {
    var category = 'happiness';
    var mySpan = document.getElementById('mySpan');
    var obj = " ";
    var myJson = " ";

    $.ajax({
        method: 'GET',
        url: 'https://api.api-ninjas.com/v1/quotes?category=' + category,
        headers: { 'X-Api-Key': 'rsVaHIX0UwaQSEjzQ8y2Sg==bbuM4tzqwVEtT7eA'},
        contentType: 'application/json',
        success: function(result) {
          myJson = JSON. stringify(result);
          myJson = myJson.replace("[", '');
          myJson = myJson.replace("]", '');
          obj = JSON.parse(myJson);
            mySpan.innerHTML = obj.quote;
            mySpan.appendChild(document.createElement("p"))
            console.log(obj.quote);
        },
        error: function ajaxError(jqXHR) {
            console.error('Error: ', jqXHR.responseText);
        }
    });
  }
  Aforisma();
  setInterval(Aforisma, 10*1000);
  
</script>
</body>
</html>