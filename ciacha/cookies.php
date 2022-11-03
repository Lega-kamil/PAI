<?php
    setcookie("login");
    setcookie("haslo");
?>

<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>    
        <form action="./cookies.php" method="POST">
         <p>LOGIN:<input type="text" name="login" placeholder="LOGIN"/></p><br>
         <p>HASLO:<input type="password" name="haslo" placeholder="PASSWORD"/></p><br>
         <input type="submit" name="send"/>
        </form>
        <?php

         setcookie("login",$_POST['login']);
         setcookie("haslo",sha1($_POST['haslo']));  

        ?>
    </body>
</html>