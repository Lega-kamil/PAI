<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="./zmienna-sesji.php" method="POST">
    <input type="submit" name="session" value="Show login and password">
    <input type="submit" name="sessionR" value="reset session">
</form>

<?php
if(isset($_POST['session'])){
    echo "Login: " . htmlspecialchars($_SESSION["imie"]) . ". "."<br />";
}
if(isset($_POST['session'])){
    echo "Haslo: " . sha1(htmlspecialchars($_SESSION["haslo"])) . ". "."<br />";
}

if(isset($_POST['sessionR'])){
    session_unset();
    session_destroy();
}

?>

</body>
</html>