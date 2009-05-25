<div class="rightal"><a href="reset_db.php?source=failuretorestricturlaccess" title="Resetta Database">Reset Database</a></div>
<h2><a href="#">Failure to restrict URL access</a></h2>
<div class="articles">
Click on the link to get the item. <br /><br />
<span style="color: blue;font-weight:bold;">Goal: execute an URL access attack.</span>
<a href="index.php?p=failuretorestricturlaccess&action=view">Show item.</a>
<br /><br />
<table class="messageboard">
  <tr>
    <td style="color:red;font-weight:bold;">Title</td>
    <td style="color:red;font-weight:bold;">Message</td>
    <td style="color:red;font-weight:bold;">Date</td>
  </tr>

<?php
function extract_from_db($table, $order) {
  $query = "SELECT * FROM ".$table." ORDER BY '".$order." DESC';";
  $result = mysql_query($query) or die(mysql_error());
  while($row = mysql_fetch_array($result)) {
    $array[] = array(
      'title' => $row['title'],
      'message' => $row['message'],
      'date' => $row['date'],
      );
  }
  return $array;
}

function delete_from_db($table) {
  $query = "TRUNCATE TABLE ".$table.";";
  $result = mysql_query($query) or die(mysql_error());
}

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'view') {
    $values = extract_from_db('lesson11', 'date');
    if (!empty($values)) {
      foreach($values as $row) {
        echo "<tr>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['message']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "</tr>";
      }
    echo "</table>";
    }
    else {
      echo "</table>";
      echo "No messages!";
    }
  }
  elseif ($_GET['action'] == 'delete') {
    delete_from_db('lesson11');
    $values = extract_from_db('lesson11', 'date');
    if (!empty($values)) {
      foreach($values as $row) {
        echo "<tr>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['message']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "</tr>";
      }
    echo "</table>";
    }
    else {
      echo "</table>";
      echo "No messages!";
    }
  }
}

?>
</div>