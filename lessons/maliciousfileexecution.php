<?php
if(isset($_GET['mfe'])) {
  include($_GET['mfe'].".php");
}
?>

<h2><a href="#">Malicious file execution</a></h2>
<div class="articles">
Click on the link to show the text.<br /><br />
<span style="color: blue;font-weight:bold;">Goal: execute an attack: let the browser execute the examplemfeattack.php file.</span><br />
<a href="index.php?p=maliciousfileexecution&mfe=examplemfe">Click to show text</a>
</div>