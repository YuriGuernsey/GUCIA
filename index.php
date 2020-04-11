<?php 
$authValid = false;
$testUsername = "Yuri";
$testPassword =  "Pass";
?>
<?php if($_POST['username'] === $testUsername && $_POST['password'] === $testPassword): return $authValid = true; ?>
<?php else: return $authValid = false;?>

<?php endif; ?> 
