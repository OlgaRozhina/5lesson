<!DOCTYPE html>
<html>
    <head>
        <title>Page B</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Page B</h1>
           <?php
        setcookie('lastpage',"b",time()+3600); 
 //       session_start ();
//        if (isset($_SESSION['login'])){
            echo $_COOKIE['login']."<br>";
//            echo $_COOKIE['password']."<br>";
//            echo  $_SESSION['login']."<br>";
//            echo  $_SESSION['password']."<br>";
//        }
   
        ?>
        <a href="index.php">Main</a>
        <a href="pageA.php">Page A</a> <br>
       
    </body>
</html>