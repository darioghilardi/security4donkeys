<?php
if (isset($_POST['submit'])) {
  if((!empty($_POST['username'])) && (!empty($_POST['password']))) {
     if (($_POST['username'] == 'admin') && ($_POST['password'] == 'paperino')) {
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

<h2><a href="#">Code Quality</a></h2>
<div class="articles">
This is a login form. Add your login and password to continue. <br /><br />
<span style="color: blue;font-weight:bold;">Goal: bypass the login</span>
<form action="index.php?p=codequality" method="POST">
  <!-- remove this line before production:
  login with admin:paperino -->
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