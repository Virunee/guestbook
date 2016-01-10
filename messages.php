<html>
  <head>
    <title>All messages</title>
    <link rel="stylesheet" type="text/css" href="theme.css">
  </head>
  <body>
    <h1>All Messages</h1>

        <table border="0">

        <?php
          $file = fopen("entries.txt", "a+"); //opens up the txt file where the data is stored.
          $filestring = file_get_contents("entries.txt");
          $entry = strtok($filestring, ";"); //splits by semicolon

          while ($entry !== false) {
            $fields = explode(",", $entry);
            $entry = strtok(";");
            echo "<tr>".
              "<td><b>Name:</b></td>".
              "<td>".$fields[0]." ".$fields[1]."</td></tr>".
              "<tr>".
                "<td><b>Message:</b></td>".
                "<td>".$fields[2]."</td></tr><tr></tr>";
        };
       ?>

       </table>
       <div>
         <br>
         <br>
         <center>
           <a href="index.php" class="btn">Submit another message</a>
         </center>
       </div>
  </body>
</html>
