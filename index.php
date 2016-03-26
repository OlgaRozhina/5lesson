<?php
// проверяем есть ли регистрация у пользователя
    if ( isset($_COOKIE['login']) && isset($_COOKIE['password'])){
     
        
         echo "Hello, ".$_COOKIE['login']."! now, you can choose a page."; echo "<br>";//  приветствуем пользователя
        
// проверяем  посещал ли  пользователь страницы
        if( isset($_COOKIE['lastpage'])) {
            
         $lastpage = $_COOKIE['lastpage'];
        
        if ($lastpage =="b"){

         header('Location: http://localhost/5lesson/pageB.php');
                      }
        elseif($lastpage =="a"){

            header('Location: http://localhost/5lesson/pageA.php');
        } 
    }
        else { echo "" ;}    
    }
//  если нет регистрации, направлем на страницу регистарции
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

        <a href="pageA.php">Page A</a>
        <br>
        <a href="pageB.php">Page B</a>
       



    </body>

    </html>