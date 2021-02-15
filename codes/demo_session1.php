<?php  session_start(); ?>
<html>
<body>

</body>
</html>
<?php

$_SESSION["firstname"] = "John";
$_SESSION["lastname"] = "Doe";
echo "Session Variables are set.";
?>
