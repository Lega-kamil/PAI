<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>    
    <form action="./cookies.php" method="POST">
        <input type="submit" name="sessionR" value="cookies reset">
    </form>
        <?php
           
            
            if(!isset($_COOKIE['user'])) {
                echo "Cookie named '" . $_COOKIE['user'] . "' is not set!";
            } else {
                echo "Cookie '" . $_COOKIE['user']. "' is set!<br>";
                echo "Value is: " . $_COOKIE['user'];
            }

            if(isset($_POST['sessionR'])){
               setcookie("user", "", time() - 86400);  
            }
             
        ?>
    </body>
</html>