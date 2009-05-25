<?php
if (isset($_GET['submit'])) {
  if(!empty($_GET['name'])) {
    echo "<span style=\"color:red;\">Welcome ".addslashes($_GET['name'])."aaa</span>";
  }
  else {
    echo "<span style=\"color:red;\">All fields are required.</span>";
  }
}
else {
?>

<h2><a href="#">XSS Reflected #2</a></h2>
<div class="articles">
Add your name here and the system will give you a welcome message.<br /><br />
<span style="color: blue;font-weight:bold;">Goal: execute an xss attack using this external file:<br />
http://ha.ckers.org/xss.js
</span><br />
<form action="index.php" method="GET">
  <label for="formname">Insert your name:</label><br /><br />
  <input type="text" id="formname" name="name" /><br /><br />
  <input type="hidden" id="p" name="p" value="xss_4" /><br /><br />
  <input type="submit" name="submit" value="Submit" />
</form>
</div>
<?php
}
?>