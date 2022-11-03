<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="./pierwsza-sesja.php" method="POST">
    <p>LOGIN:<input type="text" name="imie" placeholder="LOGIN"/></p><br>
    <p>HASLO:<input type="password" name="haslo" placeholder="PASSWORD"/></p><br>
<input type="submit" />
</form>

<?php
if(isset($_POST['imie'])){
    $_SESSION["imie"] =($_POST['imie']) ;
    echo "Session login is set."."<br />";
}

if(isset($_POST['haslo'])){
    $_SESSION["haslo"] =($_POST['haslo']) ;
    echo "Session password is set."."<br />";
}
?>

</body>
</html>