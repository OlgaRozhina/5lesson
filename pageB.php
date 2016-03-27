<!DOCTYPE html>
<html>
    <head>
        <title>Page B</title>
        <meta charset="utf-8">
        <link 
			  type="text/css"
			  rel="stylesheet"
			  href="<?php  echo $_COOKIE["color"];  ?>.css">
    </head>
    <body>
        <h1>Page B</h1>
           <?php
        // создаем cookie на страничку
        setcookie('lastpage',"b",time()+3600); 
        
        
        // проверяем есть ли сокраненая кука
        if( isset($_COOKIE["color"])){
            echo $_COOKIE["color"];
        }
        else { echo "";
             }
 //       session_start (); // проверка работы сессии
//        if (isset($_SESSION['login'])){
//            echo  $_SESSION['login']."<br>";
//            echo  $_SESSION['password']."<br>";
//        }
   
        ?>
        <br>
<!--        <a href="pageA.php">Page A</a> <br>// СНЯТЬ КОММЕНТ--> 
       <a href="settings.php">setting</a>
    </body>
</html>