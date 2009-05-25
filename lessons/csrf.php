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

if (isset($_POST['submit'])) {
  if((!empty($_POST['title'])) && (!empty($_POST['message']))) {
    //$_POST['title'] = strip_tags($_POST['title'], '<p><a>');
    //$_POST['message'] = strip_tags($_POST['message'], '<p><a>');
    // Avoid Sql injection
    //$_POST['title'] = mysql_real_escape_string($_POST['title']);
    //$_POST['message'] = mysql_real_escape_string($_POST['message']);
    $query = "INSERT INTO lesson8 (title, message, date) VALUES ('".$_POST['title']."', '".$_POST['message']."', '".date('Y-m-d H:i:s')."');";
    if (!mysql_query($query,$link)) {
      die('Error: ' . mysql_error());
    }
  echo "<span style=\"color:red;\">Message added!</span>";
  }
  else {
    echo "<span style=\"color:red;\">All fields are required.</span>";
  }
}
?>

<div class="rightal"><a href="reset_db.php?source=csrf" title="Resetta Database">Reset Database</a></div>
<h2><a href="#">CSRF</a></h2>
<div class="articles">
This is a message board. Add your message inside the form below. <br /><br />
<span style="color: blue;font-weight:bold;">Goal: execute a csrf attack. <br />
Use webscarab to detect it.</span>
<form action="index.php?p=csrf" method="POST">
  <label for="formtitle">Title</label><br />
  <input type="text" id="formtitle" name="title" /><br />
  <label for="formtitle">Message</label><br />
  <textarea id="formmessage" name="message"></textarea><br />
  <input type="submit" name="submit" value="Submit" />
</form>
<table class="messageboard">
  <tr>
    <td style="color:red;font-weight:bold;">Title</td>
    <td style="color:red;font-weight:bold;">Message</td>
    <td style="color:red;font-weight:bold;">Date</td>
  </tr>
  <?php
  $values = extract_from_db('lesson8', 'date');
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
  ?>
  </table>
</div>