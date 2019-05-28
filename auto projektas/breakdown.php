    <?php
        session_start();
    ?>  
    
    
    
    <?php
       require __DIR__ . '/connectionBreakdowns.php';  

    ?> 

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>

<body>
 
                                   
                                                    
                                                                     
        <?php    

            include ('header.php');

        ?>                                                                                    
                                                                                                       
                                                                                                                        
                                                                                                                                                          
                  
          <p> Choose the type of breakdown:</p>
                  
               <form action="" method="POST">

                     <div>

                       <div id="breakdownList">
                         <select type="text" name="breakdownList" value="breakdownList" required onfocus="if (this.value=='breakdownList') this.value='';" onblur="if(this.value==''){this.value=this.defaultValue;}">
                             <option value="engine">Engine</option>
                             <option value="drivetrain">Drivetrain</option>
                             <option value="suspension">Suspension</option>
                             <option value="electronics">Electronics</option>
                         </select>
                         <label for="breakdownList">What went wrong?</label>
                         </div>


                       <div>
                         <input name="cost" type="number">
                         <label for="cost">What's the cost of the breakdown? ($)</label>
                       </div> 


                       <div>
                         <textarea type="text" name="breakdownText" required></textarea>
                         <label for="breakdownText">List your problem in a few words</label>
                       </div>

                        <p>Rate the reliability of these components:</p>

                       <div>
                         <select type="text" name="engine" value="engine" required onfocus="if (this.value=='breakdownList') this.value='';" onblur="if(this.value==''){this.value=this.defaultValue;}">
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>                         
                         </select>
                         <label for="engine">Engine</label>
                       </div>

                       <div>
                         <select type="text" name="drivetrain" value="drivetrain" required onfocus="if (this.value=='breakdownList') this.value='';" onblur="if(this.value==''){this.value=this.defaultValue;}">
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>                         
                         </select>
                         <label for="drivetrain">Drivetrain</label>
                       </div>                                      

                       <div>
                         <select type="text" name="suspension" value="suspension" required onfocus="if (this.value=='breakdownList') this.value='';" onblur="if(this.value==''){this.value=this.defaultValue;}">
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>                         
                         </select>
                         <label for="suspension">Suspension</label>
                       </div>                   

                       <div>
                         <select type="text" name="electronics" value="electronics" required onfocus="if (this.value=='breakdownList') this.value='';" onblur="if(this.value==''){this.value=this.defaultValue;}">
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>                         
                         </select>
                         <label for="electronics">Electronics</label>
                       </div>                   



                     </div>



                     <button id="submitButton" type="submit" name="submit" id="submit">Siųsti</button>




           </form>
  
               
                                                                             

</body>
</html>
