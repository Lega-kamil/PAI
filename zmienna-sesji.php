<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="./zmienna-sesji.php" method="POST">
    <input type="submit" name="sessionR" value="session reset">
</form>

<?php
if(isset($_SESSION["number"])){
    echo "Number set: " . $_SESSION["number"] . ".<br>";
}

if(isset($_SESSION["favanimal"])){
    echo "Animal set: " . $_SESSION["favanimal"] . ".";
}


if(isset($_POST['sessionR'])){
    session_unset();
    session_destroy();
}

?>

</body>
</html>