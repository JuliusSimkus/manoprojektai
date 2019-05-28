<style>


    table{
        border: 1px solid black;
    }

</style>



<?php

        $link = mysqli_connect("localhost", "x", "x", "x");


        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }


        $sql = "SELECT * FROM newcar";


        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<div class='card-content grey lighten-4'>";
                while($row = mysqli_fetch_array($result)){
                        echo "<table>";
                        echo '<tr>' . '<td>' . $row['id'] . '</td>'. '<td>' . $row['name'] . '</td>' . '</tr>';
                        echo "</table>";
                }
                echo "</div>";




                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }


        // Close connection
        mysqli_close($link);


?>