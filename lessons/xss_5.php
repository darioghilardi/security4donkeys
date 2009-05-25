<h2><a href="#">XSS Reflected #3</a></h2>
<div class="articles">
Here is a lot of informations about you!<br /><br />

<span style="color: blue;font-weight:bold;">Goal: execute an xss attack.</span><br /><br />

IP Address: <?php echo $_SERVER['REMOTE_ADDR']; ?><br />
Browser: <?php echo $_SERVER['HTTP_USER_AGENT']; ?><br />

</div>