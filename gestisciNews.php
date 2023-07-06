<?php 


require "connDB.php";
session_start();

$inactive = 60; //after 60 seconds the user gets logged out
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
$session_life = time() - $_SESSION['timeout'];
if($session_life > $inactive)
    { 
        echo "string";
        session_destroy(); 
        header("Location: gestisciNews.php?logout"); 
    }
}
$_SESSION['timeout'] = time();

$varLogin = 2;
if (isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'] ;
	$password = md5($_POST['password']);
 
	$varLogin = login($email,$password);
	
}


if (isset($_POST['nomeAutore']) && isset($_POST['cognomeAutore']) && isset($_POST['oggetto']) && isset($_POST['notizia'])) {
	$nomeAutore = $_POST['nomeAutore'];
	$cognomeAutore = $_POST['cognomeAutore'];
	$oggetto = $_POST['oggetto'];
	$notizia = $_POST['notizia'];
	inserisciNotizia($nomeAutore,$cognomeAutore,$oggetto,$notizia);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid" style="padding: 10px;">
    <a class="navbar-brand" href="#">
      <img src="https://www.grifomultimedia.it/wp-content/uploads/2020/03/grifo-logo-1.png" alt="Logo" width="215" height="50" class="d-inline-block align-text-top" style="margin-right: 30px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>
  </div>
</nav>

<div id="Login">
<div align="center">
	<span style="color: #b7232b; font-size: xx-large; width: 100%;" class="underline custom">Login </span>
</div>
<div class="row">
 <div class="col-lg-4" style="height: 200px"></div>
  <div class="col-lg-4" align="center">
    
   <form method="POST" action="gestisciNews.php">
     <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Email</span>
        <input type="Email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Password</span>
        <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <?php if ($varLogin == 0) { ?><span style="color: #b7232b; font-size: small; width: 100%;" class="underline custom">Email o Password errati, riprovare </span><br><p></p> <?php } ?>
  <button type="submit" class="btn btn-outline-danger" style="width: 30%"><strong>LOGIN</strong></button>
   </form><br>
</div>


 </div>
 <div class="col-lg-4"></div>
 </div>


<div id="News">
<div  align="center">
	<span class="span" style="padding-top: 20px;padding-right: 0px;padding-bottom: 20px;padding-left: 0px; font-size: xx-large; width: 100%; ">Gestisci le  <span style="color: #b7232b" class="underline custom">News </span>
</div>
<div class="row">
 <div class="col-lg-4" style="height: 200px"></div>
  <div class="col-lg-4" align="center">
    
   <form method="POST" action="gestisciNews.php">
     <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Nome Autore</span>
        <input type="text" name="nomeAutore" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Cognome Autore</span>
        <input type="text" name="cognomeAutore" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Oggetto</span>
        <input type="text" name="oggetto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default" style="color: #b7232b; width: 150px">Testo Notizia</span>
        <textarea type="text" name="notizia" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></textarea>
    </div>
  <button type="submit" class="btn btn-outline-danger" style="width: 30%"><strong>Invia</strong></button><br><br>
  <a href="gestisciNews.php?logout" type="button"  style="width: 30%"><strong>Logout</strong>
   </form><br>



 </div>
 <div class="col-lg-4"></div>
 </div>
</div>
<?php if ($varLogin == 1 ) { ?>
	<script type="text/javascript">
	document.getElementById('Login').style.display = "none";
 	document.getElementById('News').style.display = "block";
 </script>
<?php } ?>
 <?php if (($varLogin == 2 || $varLogin == 0 )) { ?>
	<script type="text/javascript">
	document.getElementById('Login').style.display = "block";
 	document.getElementById('News').style.display = "none";
 </script>
<?php } ?>
</body>
</html>