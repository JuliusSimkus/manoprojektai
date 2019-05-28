
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    
    
    <style>
      
        
  
        
        #header{
            padding-left: 10px;
            background-color: #6bc1fa;
            border-radius: 5px;
            position: sticky;
            width: 100%;
            height:130px;      

        }
        
        
        #back{
            position: absolute;
            right:    0;
            bottom:   0;
            margin-bottom: 10px;
        }
        
        
        #checkCarBtn{
            margin-top: 16px;
        }
        
        #headerTag{
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 22px;
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
            padding:3px 19px;
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
     
        
        
             @media only screen and (max-width: 650px) {
              #header  {
                width: 100%;
              }
            }        
        
             @media only screen and (max-width: 650px) {
              #submit, #back  {
                    float: right;
                  display: inline-block;
              }
            }         
  
              @media only screen and (max-width: 650px) {
               #back  {
                    margin:auto;
                  display:block;
              }
            }        
        
        
        
                 @media only screen and (max-width: 650px) {
              #search {
                    margin-top: -20px;
              }
            }         
        
        
        
        
        
    
    </style>
</head>
<body>
    
        
        <div id="header">
                <p id="headerTag" style="font-weight:bold;">Search for breakdowns of any car</p>
            <div id="search">
                <form action="" method="post">
                       <label for="make">Make</label>
                        <input type="text" name="make" required>
                        <label for="model">Model</label>
                        <input type="text" name="model" required>
                        
                        <button class="myButton" type="submit" name="submitHeader" id="submit">Search</button>
                </form>
                
                
            </div>
               
                <button id="back" class="myButton" onclick="goBack()">Go Back</button>
                <button id="checkCarBtn" class="myButton" onclick="location.href='https://juliussim.lt/projektai/auto/index.php';">Submit a new car</button>
                
        </div>
        
        
        
        
        

    
      <?php

            if (isset($_POST['submitHeader'])) {
                $_SESSION['carMake'] = $_POST['make'];
                $_SESSION['carModel'] = $_POST['model'];
            } 

      ?> 



<script>
    
    
        function goBack() {
          window.history.back();
        }
    
    
</script>
</body>
</html>
