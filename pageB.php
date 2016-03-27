<!DOCTYPE html>
<html>
    <head>
        <title>Page B</title>
        <meta charset="utf-8">
        <link 
			  type="text/css"
			  rel="stylesheet"
			  href="<?php  if( isset($_COOKIE["color"])){
            echo $_COOKIE["color"];
        }
        else { echo "red"; /*   по умолчанию красная тема */
             }  ?>.css">
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
        <a href="pageA.php">Page A</a> <br>
       <h2>You can change theme here</h2>
         <a href="settings.php">Themes</a>
    </body>
</html>