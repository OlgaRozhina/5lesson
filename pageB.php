<!DOCTYPE html>
<html>
    <head>
        <title>Page B</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Page B</h1>
           <?php
        // создаем cookie на страничку
        setcookie('lastpage',"b",time()+3600); 
        
 //       session_start (); // проверка работы сессии
//        if (isset($_SESSION['login'])){
//            echo  $_SESSION['login']."<br>";
//            echo  $_SESSION['password']."<br>";
//        }
   
        ?>
        
        <a href="pageA.php">Page A</a> <br>
       
    </body>
</html>