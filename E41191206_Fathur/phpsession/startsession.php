<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "pink";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set. <br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);

// // remove all session variables
// session_unset();

// // destroy the session
// session_destroy();
?>

</body>
</html>