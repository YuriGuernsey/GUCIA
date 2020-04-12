<?php 
$testUsername = "Yuri";
$testPassword =  "Pass";?>
<?php if($_POST['username'] === $testUsername && $_POST['password'] === $testPassword): echo "Login"; ?>
<?php else: echo "error" ?>
<?php endif; ?> 
