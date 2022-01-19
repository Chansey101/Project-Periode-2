<?php
    // var_dump($_POST);
   
    echo "<h1>Mijn naam is: " . $_POST["firstname"] . " " . $_POST["infix"] . " " . $_POST["lastname"] . " " . $_POST["password"]. "</h1>";
   
    echo "<hr>";

    
   // de inlog gegevens van my sql server
   $servername = "localhost";
   $username = "root";
   $password = "";
   $databasename = "prak2";

   $firstname = $_POST["firstname"];
   $infix = $_POST["infix"];
   $lastname = $_POST["lastname"];

    // we maken hier verbinding naar de sql server
  $conn = mysqli_connect($servername,$username, $password, $databasename);

    // we maken een inster query voor het wegschrijven van de formuliergegevens naar de database
    $sql = "INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `password`) VALUES (NULL, '{$_POST["firstname"]}', '{$_POST["infix"]}', '{$_POST["lastname"]}', '{$_POST["password"]}');";
   
   //we sturen de query naar de database toe
   mysqli_query($conn, $sql);
  
   // wel laten php ons doorsturen
  // header("Location: ./index.php");

  header("Refresh:1.5; url=./index.php")

  
  ?>

<h1 id="alert">Uw gegevens zijn verwerkt<h1>  

