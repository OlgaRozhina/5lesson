<?php

    if ( isset($_COOKIE['login']) && isset($_COOKIE['password'])){
     
         
         echo $_COOKIE['login']; echo "<br>";// просто для проверки
          $lastpage = $_COOKIE['lastpage']; echo "<br>";
  
        
        if ($lastpage =="b"){
//            echo " переходим на Б";
         header('Location: http://localhost/5lesson/pageB.php');
//            
            }
        elseif($lastpage =="a"){
//            echo " переходим на A";
            header('Location: http://localhost/5lesson/pageA.php');
        }    

  
             
    }
   
      

else {   
header('Location: http://localhost/5lesson/registration.php');
}
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Main</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>MAIN</h1>
          
          <a href="pageA.php">Page A</a> <br>
          <a href="pageB.php">Page B</a> <br>
          <a href="registration.php"> Registration</a> <br>
          
          
          
    </body>
</html>