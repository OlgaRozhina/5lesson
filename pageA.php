<!DOCTYPE html>
<html>
    <head>
        <title>Page A</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Page A</h1>
          <?php
         setcookie('lastpage','a',time() + 3600*24*7);
       
        
        ?>
        
        
        <a href="pageB.php">Page B</a> <br>
    </body>
</html>