<?php 
$testUsername = "Yuri";
$testPassword =  "Pass";
?>
<?php if($_POST['username'] === $testUsername && $_POST['password'] === $testPassword): return true; ?>
<?php else: return false;?>

<?php endif; ?> 
