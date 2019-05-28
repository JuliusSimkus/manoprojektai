


<style>


    table{
        border: 1px solid black;
    }
    #averageBreakdown{
        
    }

</style>

        <?php

            $certainMake = $_SESSION['carMake'];
            $certainModel = $_SESSION['carModel'];
            $certainMileage = $_SESSION['carMileage'];
            $certainYear = $_SESSION['carYear'];
            $certainEmail = $_SESSION['email'];

            echo "<br>";
            echo "<br>";

        ?>


        <?php

            $link = mysqli_connect("localhost", x, x, x);


            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }


            $sql = "SELECT make, model, cost FROM breakdowns
            WHERE make='$certainMake' && model='$certainModel' ";

            echo "<br>";

            $data  = array();


            if ($result = mysqli_query($link, $sql)) {
              while ($row = mysqli_fetch_assoc($result)) {
                 $data[] = $row;
              }
            }
            return $data;
            echo $data;



            // Close connection
            mysqli_close($link);



        ?>