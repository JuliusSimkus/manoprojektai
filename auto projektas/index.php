<?php 

    session_start();
?>
<?php
   require __DIR__ . '/db.php';  

?> 

 

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <style type="text/css">
     
        
                .formDiv{
            font-family: 'Open Sans Condensed', arial, sans;
            width: 450px;
            padding: 20px;
            background: #FFFFFF;
            margin: 20px auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);
            margin-left: auto;
            margin-right: auto;
            margin-top: -20px;


        }
        
        .formDiv input[type="text"],
        .formDivinput[type="date"],
        .formDiv input[type="datetime"],
        .formDiv input[type="email"],
        .formDiv input[type="number"],
        .formDiv input[type="search"],
        .formDiv input[type="time"],
        .formDiv input[type="url"],
        .formDiv input[type="password"],
        .formDiv select 
        {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            display: block;
            width: 80%;
            padding: 7px;
            border: none;
            border-bottom: 1px solid #ddd;
            background: transparent;
            margin-bottom: 10px;
            font: 16px Arial, Helvetica, sans-serif;
            height: 35px;
        }
        .formDiv textarea{
            resize:none;
            overflow: hidden;
        }
        
        .formDiv input[type="button"], 
        .formDiv input[type="submit"]{
            -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
            -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
            box-shadow: inset 0px 1px 0px 0px #45D6D6;
            background-color: #2CBBBB;
            border: 1px solid #27A0A0;
            display: inline-block;
            cursor: pointer;
            color: #FFFFFF;
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 14px;
            padding: 8px 18px;
            text-decoration: none;
            text-transform: uppercase;
        }
        
        .formDiv input[type="button"]:hover, 
        .formDiv input[type="submit"]:hover {
            background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
            background-color:#34CACA;
        }
        


        @media only screen and (max-width: 600px) {
          body {
            background-color: lightblue;
          }
        }     
        
        
        .myButton {
            -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
            -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
            box-shadow:inset 0px 1px 0px 0px #ffffff;
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
            background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
            background-color:#ffffff;
            -moz-border-radius:9px;
            -webkit-border-radius:9px;
            border-radius:9px;
            border:1px solid #dcdcdc;
            display:inline-block;
            cursor:pointer;
            color:#666666;
            font-family:Arial;
            font-size:15px;
            font-weight:bold;
            padding:4px 19px;
            text-decoration:none;
            text-shadow:0px 1px 0px #ffffff;
        }
        .myButton:hover {
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
            background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
            background-color:#f6f6f6;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }

    

        
        #form{
            padding-left: 25px;
            width: 85%;
            padding-top: 15px;
        }
        
    
    </style>
</head>

<body>
        
            
                    
    <h3 id="magic" style="font-family: 'Open Sans Condensed', sans-serif; margin-left: 10px; font-size:20px;"> Submit your data for further magic</h3>
              
       <br>       
       <br>
       <br>   
           
           
           
            <div class="formDiv"> 

                       <form id="form" action="" method="POST">

                         <div>

                           <div>
                            <label for="first_name">Name</label>
                             <input id="first_name" type="text" name="first_name" required>
                             
                           </div>

                           <div>
                             <label for="last_name">Surname</label>
                             <input type="text" name="last_name" required>
                             
                           </div>

                           <div>
                            <label for="email">E-mail</label>
                             <input type="email" name="email" required>
                             
                           </div>

                           <div>
                            <label for="make">Make</label>
                             <input type="text" name="make" required>
                             
                           </div>                                      

                           <div>
                            <label for="model">Model</label>
                             <input type="text" name="model" required>
                             
                           </div>                   

                           <div>
                             <label for="mileage">Mileage</label>
                             <input type="text" name="mileage" required>
                             
                           </div>                   

                            <div>
                             <label for="year">Year</label>
                             <input type="text" name="year" required>
                             
                           </div>                    

                          <div>
                            <label for="fuel">Fuel</label>
                             <select type="text" class="validate" name="fuel" required value="fuel">
                                   <option value="petrol">Petrol</option>
                                   <option value="diesel">Diesel</option>
                              </select>
                           </div>                   

                         </div>

                             <button class="myButton" type="submit" name="submit" id="submit" style="margin-top:7px;">Send</button>

                       </form>

                
            </div> 
            
    <?php
    
        if (isset($_POST['submit'])) {
            $_SESSION['carMake'] = $_POST['make'];
            $_SESSION['carModel'] = $_POST['model'];
            $_SESSION['carMileage'] = $_POST['mileage'];
            $_SESSION['carYear'] = $_POST['year'];
            $_SESSION['email'] = $_POST['email'];
        }
    
    ?>
    
</body>
</html>
