<?php
    if (isset($_POST['submit'])) {
        $_SESSION['carMake'] = $_POST['make'];

        // Use the following code to print out the variables.
        echo 'Session: '.$_SESSION['carMake'];
        echo '<br>';
        echo 'POST: '.$_POST['make'];
    }
?> 


sita kas virsuje desiu i afterindex.php




       <?php               
            include ('card2.php');
        ?>
        
       
      cia visu duomenu istraukimas is lenteles
      
     
      <?php

    echo $_SESSION['carMake'];

  ?> 
  
 




                $carList = array($row['make']);
                $nissan = array_search('Ferrari', $carList);
                 print_r(array_values($nissan ));   
                 
                
               
              
             zaidimas su arrays
             
            
           
          breakdown foreach bandau
                          $carList = array($row['make']);
                foreach ($carList as $car ){
                    echo $car;
                }
                
               
              
             
            $sql = "SELECT make,model FROM newCar
WHERE make='$certainMake' && model='$certainModel' ";


cia kaip paimti tam tikra stulpeli










if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                echo "<table>";
                echo '<tr>' . '<td>' . $row['make'] . '</td>'. '<td>' . $row['model'] . '</td>' . '<td>' . $row['breakdown'] . '</td>' . '<td>' . $row['cost'] . '</td>' . '<td>' . $row['engine'] . '</td>' . '</tr>';
                echo "</table>";
            "<br>";
            $carList = array($row['make']);
            print_r ($carList);
        }


        
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}






required su vardais pridet onfocus="if (this.value=='Name') this.value='';" onblur="if(this.value==''){this.value=this.defaultValue;}"