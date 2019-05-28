<?php

   define("DB_SERVER", "localhost");
   define("DB_USER", "jussim_auto");
   define("DB_PASSWORD", "Autodb123");
   define("DB_NAME", "jussim_autoData");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);



    $certainMake = $_SESSION['carMake'];
    $certainModel = $_SESSION['carModel'];
    $certainMileage = $_SESSION['carMileage'];
    $certainYear = $_SESSION['carYear'];
    $certainEmail = $_SESSION['email'];


if($mysqli->connect_error){
   echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
   echo 'Klaida: ' . $mysqli->connect_error . '\n';
   exit();
}


if(isset($_POST['submit'])){
     mysqli_query($mysqli, "INSERT INTO breakdowns (make, model, mileage, year, breakdown, cost, breakdownText, engine, drivetrain, suspension, electronics, email) 
     VALUES('$certainMake', '$certainModel', '$certainMileage', '$certainYear', '$_POST[breakdownList]', '$_POST[cost]', '$_POST[breakdownText]', '$_POST[engine]', '$_POST[drivetrain]', '$_POST[suspension]', '$_POST[electronics]', '$certainEmail' )");

    $mysqli->close();
     header('Location: https://juliussim.lt/projektai/auto/checkCar.php');  
    
}