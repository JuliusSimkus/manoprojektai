   <?php
        session_start();
    ?> 
    
      <?php               
        include ('header.php');
    ?>  
                
  <h2 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;">Here you can find valuable information on the car:</h2>       
         
         
      <?php               
            include ('breakdownCheck.php');
      ?>
        
       <?php               
            include ('averageRepair.php');
      ?>
        
      <?php               
            include ('averageRatings.php');
      ?>     