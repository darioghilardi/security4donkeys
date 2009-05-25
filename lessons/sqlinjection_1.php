<?php
if (isset($_POST['submit'])) {
  if((!empty($_POST['username'])) && (!empty($_POST['password']))) {
    $query = "SELECT count(*) FROM lesson6 WHERE username='".$_POST['username']."' AND password='".$_POST['password']."';";
    $result = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_row($result);
     if (!empty($row[0])) {
       echo "Welcome!";
     }
     else {
       echo "<span style=\"color:red;\">User not recognized.</span>";
     }
  }
  else {
    echo "<span style=\"color:red;\">All fields are required.</span>";
  }
}
else {
?>

<div class="rightal"><a href="reset_db.php?source=sqlinjection_1" title="Resetta Database">Reset Database</a></div>
<h2><a href="#">SQL Injection #1</a></h2>
<div class="articles">
This is a message board. Add your message inside the form below. <br /><br />
<span style="color: blue;font-weight:bold;">Goal: execute a sql injection attack.</span>
<form action="index.php?p=sqlinjection_1" method="POST">
  <label for="formtitle">Username</label><br />
  <input type="text" id="formusername" name="username" /><br />
  <label for="formtitle">Password</label><br />
  <input type="password" id="formpassword" name="password" /><br />
  <input type="submit" name="submit" value="Login" />
</form>
</div>

<?php
}
?>