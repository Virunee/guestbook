<html>
<head>
  <title>Submitted!</title>
  <link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>
  <?php
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$message = $_GET["message"];
$entry = $firstname.",".$lastname.",".$message.";";
$file = fopen("entries.txt", "a");
fputs($file, $entry);
fclose($file);
   ?>
  <h1>Thank you for submitting!</h1>
  <div class="block">
  <center><h2>Your message:</h2><br><br>
<?php
echo $message."<br>";
?>
<br><br><br> <a href="index.php" class="btn">Submit another message</a>
</center>
</div>
</body>
</html>
