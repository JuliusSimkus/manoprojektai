<style>

            #avgCost{
        width: 335px;
        height: 70px;
        /*	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
            background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);*/
                background-color: #84cbfb;
        -webkit-border-radius: 35px;
        -moz-border-radius: 35px;
        border-radius: 35px;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            font-size:25px;
             color: black;   
            text-align: center;
            vertical-align: middle;
            padding:3px 19px;
            text-decoration:none;
            text-shadow:0px 1px 0px #ffffff;
                            margin-left: 50px;
            }


            @media only screen and (max-width: 1100px) {
              #avgCost {
                width: 270px;
                height: 43px;
                font-size:18px;  
                float: left;

              }
            }
    

</style>


        <?php

            $certainMake = $_SESSION['carMake'];
            $certainModel = $_SESSION['carModel'];
            $certainMileage = $_SESSION['carMileage'];
            $certainYear = $_SESSION['carYear'];
            $certainEmail = $_SESSION['email'];


        $servername = "x";
        $username = "x";
        $password = "x";
        $dbname = "jussim_autoData";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT AVG(cost) AS averagecost FROM breakdowns
        WHERE make='$certainMake' && model='$certainModel' ";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $sum = $row['averagecost'];
        echo "<div id='avgCost'>" . "Average repair for " . "$certainMake " . "$certainModel" . " costs " . round($sum) . " Eur." . "</div>";


        $conn->close();

?>