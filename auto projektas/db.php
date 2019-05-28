<?php

   define("DB_SERVER", "localhost");
   define("DB_USER", "jussim_auto");
   define("DB_PASSWORD", "Autodb123");
   define("DB_NAME", "jussim_autoData");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if($mysqli->connect_error){
   echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
   echo 'Klaida: ' . $mysqli->connect_error . '\n';
   exit();
}


if(isset($_POST['submit'])){
     mysqli_query($mysqli, "INSERT INTO newcar (name, surname, email, make, model, mileage, year, fuel) 
     VALUES('$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[make]', '$_POST[model]', '$_POST[mileage]', '$_POST[year]', '$_POST[fuel]' )");

    $mysqli->close();
     header('Location: https://juliussim.lt/projektai/auto/afterIndex.php');  
    
}