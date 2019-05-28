<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <style>

            #avgEngine{
                        width: 23%;
                        height: 22%;
                        background-color: #84cbfb;
                        -webkit-border-radius: 35px;
                        -moz-border-radius: 35px;
                        border-radius: 35px;
                        font-family: "Trebuchet MS", Helvetica, sans-serif;
                        font-size:24px;
                         color: black;   
                        text-align: center;
                        padding:3px 19px;
                        text-decoration:none;
                        text-shadow:0px 1px 0px #ffffff;
                        margin-right: 100px;
                        float: right;
                        margin-top: -140px;

            }


            #avgDrivetrain{
                            width: 23%;
                            height: 22%;
                            background-color: #84cbfb;
                            -webkit-border-radius: 35px;
                            -moz-border-radius: 35px;
                            border-radius: 35px;
                            font-family: "Trebuchet MS", Helvetica, sans-serif;
                            font-size:24px;
                             color: black;   
                            text-align: center;
                            vertical-align: middle;
                            padding:3px 19px;
                            text-decoration:none;
                            text-shadow:0px 1px 0px #ffffff;
                            margin-right: 100px;
                            float: left;  

            }    


            #avgSuspension{
                            width: 22%;
                            height: 22%;
                            background-color: #84cbfb;
                            -webkit-border-radius: 35px;
                            -moz-border-radius: 35px;
                            border-radius: 35px;
                            font-family: "Trebuchet MS", Helvetica, sans-serif;
                            font-size:24px;
                             color: black;   
                            text-align: center;
                            vertical-align: middle;
                            padding:3px 19px;
                            text-decoration:none;
                            text-shadow:0px 1px 0px #ffffff;
                            margin-right: 100px;
                            margin-top: 20px;
                            float: right;   
            }   


            #avgElectronics{

                            width: 32%;
                            height: 25%;
                                    background-color: #84cbfb;
                            -webkit-border-radius: 35px;
                            -moz-border-radius: 35px;
                            border-radius: 35px;
                                font-family: "Trebuchet MS", Helvetica, sans-serif;
                                font-size:24px;
                                 color: black;   
                                text-align: center;
                                vertical-align: middle;
                                padding:3px 19px;
                                text-decoration:none;
                                text-shadow:0px 1px 0px #ffffff;
                                margin:auto;
                                 margin-top: 0px;
            } 






                    #userReports{

                                width: 32%;
                                height: 25%;
                                        background-color: #84cbfb;
                                -webkit-border-radius: 35px;
                                -moz-border-radius: 35px;
                                border-radius: 35px;
                                    font-family: "Trebuchet MS", Helvetica, sans-serif;
                                    font-size:24px;
                                     color: black;   
                                    text-align: center;
                                    vertical-align: middle;
                                    padding:3px 19px;
                                    text-decoration:none;
                                    text-shadow:0px 1px 0px #ffffff;
                                    margin:auto;
                                     margin-top: 0px;
            }




                #reportTag{

                            font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                            font-size: 25px;
                            margin-left: 25px;
                }     



               @media only screen and (max-width: 1100px) {
                  #avgEngine, #avgDrivetrain, #avgSuspension, #avgElectronics, #userReports, #reportsDiv  {
                    width: 250px;
                    height: 41px;
                    font-size:17px;  
                    display: inline-block;
                      margin-left: auto;
                      margin-right: auto;
                      margin-top: 5px;
                  }
                }          
        
</style>    
    
    
</head>

<body>
    
    
    
    
    <?php
    
        echo "<br>";
        echo "<br>";
            $certainMake = $_SESSION['carMake'];
            $certainModel = $_SESSION['carModel'];
            $certainMileage = $_SESSION['carMileage'];
            $certainYear = $_SESSION['carYear'];
            $certainEmail = $_SESSION['email'];
        echo "<br>";
        echo "<br>";


        $servername = "localhost";
        $username = "jussim_auto";
        $password = "Autodb123";
        $dbname = "jussim_autoData";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT AVG(engine) AS averageEngine FROM breakdowns
        WHERE make='$certainMake' && model='$certainModel' ";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $sum = $row['averageEngine'];
        echo "<div id='avgEngine'>" . "Average engine rating for " . "$certainMake " . "$certainModel" . " is " . round($sum, 2) . " out of 5" . "</div>";



        $sql1 = "SELECT AVG(drivetrain) AS averageDrivetrain FROM breakdowns
        WHERE make='$certainMake' && model='$certainModel' ";

        $result = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result);
        $sum = $row['averageDrivetrain'];
        echo "<br>" . "<div id='avgDrivetrain'>" . "Average drivetrain rating for " . "$certainMake " . "$certainModel" . " is " . round($sum, 2) . " out of 5" . "</div>";


        $sql2 = "SELECT AVG(suspension) AS averageSuspension FROM breakdowns
        WHERE make='$certainMake' && model='$certainModel' ";

        $result = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_assoc($result);
        $sum = $row['averageSuspension'];
        echo "<br>" . "<div id='avgSuspension'>" . "Average suspension rating for " . "$certainMake " . "$certainModel" . " is " . round($sum, 2) . " out of 5" . "</div>";



        $sql3 = "SELECT AVG(electronics) AS averageElectronics FROM breakdowns
        WHERE make='$certainMake' && model='$certainModel' ";

        $result = mysqli_query($conn, $sql3);
        $row = mysqli_fetch_assoc($result);
        $sum = $row['averageElectronics'];
        echo "<br>" . "<div id='avgElectronics'>" . "Average electronics rating for " . "$certainMake " . "$certainModel" . " is " . round($sum, 2) . " out of 5" . "</div>";


        /*echo "<div id='reportsDiv'>" . "<p id='reportTag'>" . "Unfiltered breakdown notes from users that have $certainMake $certainModel:" . "</p>"."</div>";  */


        $sql4 = "SELECT breakdown,breakdownText, mileage FROM breakdowns
        WHERE make='$certainMake' && model='$certainModel' ORDER BY RAND() LIMIT 3 ";

        $result = mysqli_query($conn, $sql4);
        while ($row = $result->fetch_assoc()) {
           echo "<br>" . "<div id='userReports'>" . " User problem with " . $row['breakdown'] . ": " . $row['breakdownText'] . " @ " . $row['mileage'] . "km" . "</div>";
        }




        $conn->close();
    
?>




</body>
</html>

   
    




