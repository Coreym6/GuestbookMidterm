<?php
?>
<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="container">
      <h1>View my schedule below:</h1>
      <?php
         $fp = @fopen("courses.csv","r"); // the @ symbol suppresses any error messages
         if ($fp) {
            while (($data = fgetcsv($fp)) !== FALSE) {
              echo "<li>{$data[0]}: {$data[1]}: {$data[2]}: {$data[3]}</li>\n";
            }
            fclose($fp);
         } else {
           echo "There are no current entries. Be the first!";
         }
      ?>
    </div>
  </body>
</html>