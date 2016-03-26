<?php

    if ( isset($_COOKIE['login']) && isset($_COOKIE['password'])){
     
        
         echo "Hello, ".$_COOKIE['login']."! now, you can choice a page"; echo "<br>";// просто для проверки
        if( isset($_COOKIE['lastpage'])) {
            
        
          $lastpage = $_COOKIE['lastpage'];
        
        if ($lastpage =="b"){
//            echo " переходим на Б";
         header('Location: http://localhost/5lesson/pageB.php');
                      }
        elseif($lastpage =="a"){
//            echo " переходим на A";
            header('Location: http://localhost/5lesson/pageA.php');
        } 
    }
        else { echo "You still haven't chosen a page " ;}    
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