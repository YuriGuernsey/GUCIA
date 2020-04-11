<?php 
$authValid = false;
$testUsername = "Yuri";
$testPassword =  "Pass";
?>
<?php if($_POST['username'] === $testUsername && $_POST['password'] === $testPassword): $authValid = true; echo ('Login'); ?>
<?php else: $authValid = false; return $authValid?>

<?php endif; ?> 
