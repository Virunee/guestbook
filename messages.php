<html>
  <head>
    <title>All messages</title>
  </head>
  <body>
    <h1>All Messages<h1>

        <table border="0">
        <?php
        $output = "<ul>";
        $file = fopen("entries.txt", "a+"); //opens up the txt file where the data is stored.
        $filestring = file_get_contents("entries.txt");
      $entry = strtok($filestring, ";"); //splits by semicolon

         while ($entry !== false) {
           //echo "$entry<br/>";
           //echo $entry;
            $fields = explode(",", $entry);
          //  print_r($fields);
            $entry = strtok(";");
            echo "<tr>".
              "<td>Name:</td>".
              "<td>".$fields[0]." ".$fields[1]."</td>.</tr>".
              "<tr>".
                "<td>Message:</td>".
                "<td>".$fields[2]."</td></tr>";
        };
       ?>
       </table>
  </body>
</html>
