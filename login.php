<?php session_start(); ?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>login</title>
<link rel="stylesheet" href="style.css">   
</head>
<?php require "header2.php"; ?>
<body>
<h1 class="form-header">Log In</h3>
<div class="myform">
<form method="post" action="validation.php">
<input type="text" placeholder="Email / User Name" name="login" required><br><br>
<input type="password" placeholder="password" name"passwd" required><br><br>
<input type="submit" style="">
</form>
</div>
</body>
<?php require "footer.php"; ?>
</html>
