<html>
  <head>
    <title>All messages</title>
  </head>
  <body>
    <h1>All Messages<h1>
      <?php
        $output = "<ul>";
        $file = fopen("entries.txt", "a+"); //opens up the txt file where the data is stored.
        $filestring = file_get_contents("entries.txt");
        //echo "Filestring: "."$filestring<br/>";
      $entries = strtok($filestring, ";"); //splits up the txt file string into separate entries.
        while ($entries) {
              echo "$entries<br/>";
            $entries = strtok(";");
          };
        //$fields = explode(",", $entries);
        //foreach ($fields as $values)
          //echo "$values<br/>";
      //  $fields = strtok($entries, ",");
          //while ($fields !== false) {
            //echo "$fields<br/>";
            //$fields = strtok(",");
          //$key = explode($value, ","); //splits up entries into individual answers.
          //$output."<li><h2>$fields[0] $fields[1]</h2><p>$fields[2]</p></li>";
        //};
        $output."</ul>";
        echo $output;
       ?>
  </body>
</html>
