<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
   
<!--
   <a href="#">Home</a>
   <a href="#">About us</a>
   <a href="#">Links</a>
   <a href="#">Contact us{}a>
   function addition(){
   $GLOBALS['z]=GLOBALS['x'] +GLOBALS['z']
-->
   <?php
    
    $name =""; $nameErr="";
        if ($_SERVER["REQUEST_METHOD"]=="POST"){if (empty($_POST["name"])){$nameErr = "Name is required"
         $"Email is required";                                                           if (!preg_match("/^[a-zA-Z]*$/",$name))      
        {$nameErr= "only letters and white spaces allowed";
        }else {
             {$name=$_POST["name"];
              {$email=$_POST["email"];
         }
             }
    
    ?>

    
    
    <form action="<?php html $_SERVER["PHP_SELF"];?>" method="post">
                                      
        user name:<br><input type= "text" name="username" placeholder="name" ><span style="color:red">*</span>
        <?php echo $nameErr. "<br>"; ?><br>
        
         Email: <br>
         <input type="text" name="email"><span style="color:red">*</span><?php echo
    $emailErr. "<br>"; ?><br><br>
    
       user password: <br>
    <input type= "password" name="psw" placeholder="enter password"><span style="color:red">*</span><?php echo
    $passwordErr. "<br>"; ?><br><br>
        <input type= "submit">
        
    </form>
    

    
    
    

    

        
        
        
        
    
</body>
</html>