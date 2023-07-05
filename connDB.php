<?php


function connessione()
{
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "grifo";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
   
      return $conn;
   
}


function login($email, $password)
{  
   
   
   $connection = connessione();

   $sql = "SELECT * FROM utente";

   $result = $connection->query($sql);
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

       if ($email == $row["email"] && $password == $row["password"]) {
        return 1;
       }
       
    }
      return 0;
       
   }

   $connection->close();
}

function inserisciNotizia($nomeAutore,$cognomeAutore,$oggetto,$notizia)
{
   $connection = connessione();
   
   $sql2 = "INSERT INTO news (`nomeAutore`, `cognomeAutore`, `oggetto`, `testoNotizia`, `dataNotizia`) VALUES ('$nomeAutore','$cognomeAutore','$oggetto','$notizia', Now())";

   //echo $sql2;

   if ($connection->query($sql2) == TRUE) {
      return 1;
   } else {
      return 0;
   }

   $connection->close();
}


function elencoNotizie()
{  
   
   
   $connection = connessione();
   mysqli_set_charset( $connection, 'iso-8859-1' );
   $sql3 = "SELECT * FROM news ";

   $result = $connection->query($sql3);
   if ($result->num_rows > 0) {
    // output data of each row
      $i = 0;
    while($row = $result->fetch_assoc()) {
       $nomeAutore = $row["nomeAutore"];
       $cognomeAutore = $row["cognomeAutore"];
       $oggetto = $row["oggetto"];
       $notizia = $row["testoNotizia"];
       $dataNotizia = $row["dataNotizia"];
       $notiziaCompleta[$i] = $row["nomeAutore"].",".$row["cognomeAutore"].",".$row["oggetto"].",".$row["testoNotizia"].",".$row["dataNotizia"].";";
       
       $i++; 
       
    }return $notiziaCompleta;
   }

   $connection->close();
}

