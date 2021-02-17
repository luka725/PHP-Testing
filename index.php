<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>
<link rel="icon" href="header-logo-custom.png" type="image/gif"> 
<link rel="stylesheet" href="style.css">
<body>
<?php require "header.php";?>
<h1 class="form-header" >Register Here</h1>
<div class="myform">
<form method="post" action="submit.php" >
<input type="text" placeholder="Name:" name="name" required><br><br>
<input type="text" placeholder="Surname:" name="surname" required><br><br>
<input type="email" placeholder="Email:" name="email"  required><br><br>
<input type="password" placeholder="Password:" name="password" required><br><br>
<input type="submit" id="button"> 
</form>
</div>
<?php require "footer.php";?>
</body>
</html>
