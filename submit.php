<html>
<head>
  <title>Submitted!</title>
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
  <p>Your message:</p><br>
<?php
echo $message."<br>";
?>
</body>
</html>
