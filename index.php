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
        <h1>MAIN</h1>

        <a href="pageA.php">Page A</a>
        <br>
        <a href="pageB.php">Page B</a>
       <br>
       <h2>You can change theme here</h2>
       <a href="settings.php">Themes</a>



    </body>

    </html>