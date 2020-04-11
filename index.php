<?php 
$authValid = false;
$testUsername = "Yuri";
$testPassword =  "Pass";
?>
<?php if($_POST['username'] === $testUsername && $_POST['password'] === $testPassword): echo $authValid = true; ?>
<?php else: echo $authValid = false;?>

<?php endif; ?> 
