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
            
   
        ?>
        <br>
        <a href="pageA.php">Page A</a> <br>
       <p>You can change theme <a href="settings.php">here</a></p>
    </body>
</html>