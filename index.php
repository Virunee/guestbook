<html>
  <head>
    <title>Virunee's Guestbook</title>
    <link rel="stylesheet" type="text/css" href="theme.css">
  </head>
  <body>
      <h1>Guestbook</h1>
      <form action="submit.php" method="GET">
        <table border="0">
          <tr>
            <td>First name:</td>
            <td><input type="text" size="20" name="firstname"></td>
          </tr>
          <tr>
            <td>Last name:</td>
            <td><input type="text" size="20" name="lastname"></td>
          </tr>
          <tr>
            <td>Message:</td>
            <td><input type="text" size="20" name="message"></td>
          </tr>
          <tr><td></td>
            <td><center><input type="submit" value="Submit">
            <input type="reset" value="Reset form"></center></td>
          </tr>
        </table>
      </form>
      <br><br>
      <center><a href="messages.php" class="btn">See all messages</a><center>
    </body>
</html>
