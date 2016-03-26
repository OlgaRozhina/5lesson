
<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <meta charset="utf-8">
</head>

<body>

    <form action="" method="post">

        <label for="login">Login</label>
        <br>
        <input type="text" name="login" id="login" placeholder="Enter login">
        <br>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Password">
        <br>
        <br>
        <label>
            <input type="checkbox" name="chb" value="save"> Save
        </label>
        <br>
        <br>
        <input type="submit" value="SignUp">
        <br>
       
    </form>


    <?php
        
        if(isset($_POST['login']) && isset($_POST['password']) && isset ($_POST['chb'])){
		 $log = $_POST['login'];
	 	 $pas = $_POST['password'];
		 $chb = $_POST['chb'];
                          
        setcookie('login',"$log",time()+3600*24*7);    
        setcookie('password',"$pas",time()+3600*24*7);
        setcookie('checkbox',"$chb",time()+3600*24*7);
        echo "$log , registration is successful";
        
          }
        else {
            echo "Sorry, you need registration";
        }
	
        ?>
  <br>
        <a href="index.php">Main</a>


</body>

</html>