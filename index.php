<?php 
$authValid = false;
$testUsername = "Yuri";
$testPassword =  "Pass";
?>
<?php if($_POST['username'] === $testUsername && $_POST['password'] === $testPassword): $authValid = true; echo ($authValid); ?>
<?php else: $authValid = false; echo ($authValid); ?>

<?php endif; ?> 
