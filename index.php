<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inner Join</title>
  </head>
  <body>
    <?php
      mysql_connect("localhost","root","");
      mysql_select_db("writtersdb");

      $query=mysql_query("select * from authors");
      $rowcount=mysql_num_rows($query);
      for ($i=1; $i<=$rowcount; $i++) {
        $row=mysql_fetch_array($query);
        print_r($row);
      }
     ?>

  </body>
</html>
