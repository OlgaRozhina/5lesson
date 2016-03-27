<!DOCTYPE html>
<html>
    <head>
        <title>Page A</title>
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
        <h1>Page A</h1>
          <?php
        // создаем cookie на страничку
         setcookie('lastpage','a',time() + 3600*24*7);
              
        ?>
            
        <a href="pageB.php">Page B</a> <br>
         <p>You can change theme <a href="settings.php">here</a></p>
    </body>
</html>