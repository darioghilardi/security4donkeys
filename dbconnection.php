<?php
  $host = "localhost"; //database location
  $user = "dario"; //database username
  $pass = "pippo123"; //database password
  $db_name = "security4donkey"; //database name

  //database connection
  $link = mysql_connect($host, $user, $pass);
  mysql_select_db($db_name);

  //sets encoding to utf8
  mysql_query("SET NAMES utf8");
?>
