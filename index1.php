<?php
//include auth.php file on all secure pages
include("auth1.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div class="form">
<p> Thank you <?php echo $_SESSION['username']; ?>!</p>
<p>We will contact you soon<br><br> <a href="index.html">Home</a> </p>

</div>
</body>
</html>
