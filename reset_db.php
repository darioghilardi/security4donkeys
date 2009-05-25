<?php
  require_once('dbconnection.php');
  switch ($_GET['source']):
    case 'xss_1':
      mysql_query("TRUNCATE TABLE lesson1;");
    break;
    case 'xss_2':
      mysql_query("TRUNCATE TABLE lesson2;");
    break;
    case 'xss_3':
      mysql_query("TRUNCATE TABLE lesson3;");
    break;
    case 'csrf':
      mysql_query("TRUNCATE TABLE lesson8;");
    case 'failuretorestricturlaccess':
      $query = "INSERT INTO lesson11 (title, message, date) VALUES ('title', 'message', '2001-05-03 11:11');";
      $result = mysql_query($query) or die(mysql_error());
    default:
    break;
   endswitch;
  header('Location: index.php?p='.$_GET['source']);
?>