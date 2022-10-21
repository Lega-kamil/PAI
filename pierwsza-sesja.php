<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["number"] = 5;
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>