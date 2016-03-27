<! DOCTYPE html>

<html>

<head>

</head>

<body>


    <form action="" method="post">


        <label>
            <input type="checkbox" name="chb" value="red"> RED
        </label>
        <label>
            <input type="checkbox" name="chb" value="blue">BlUE
        </label>
        <label>
            <input type="checkbox" name="chb" value="green"> GREEN
        </label>
        <br>
        <br>
        <input type="submit" value="SAVE">
        <br>

       </form>
       <?php
    if(isset($_POST['chb']) ){
        $color = $_POST['chb'];//проверка
    setcookie('color',"$color",time()+3600);
     header('Location: http://localhost/5lesson/index.php');// перенаправляем на главную
    }
    
    ?>
    <a href="pageB.php">Page B</a> <br>
    <a href="pageA.php">Page A</a> <br>
</body>

</html>