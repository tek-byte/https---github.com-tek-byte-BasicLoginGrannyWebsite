<?php 
include_once('config.php');

$UN = $_SESSION['username'];


?>

<html lang="en">

<head>
<link rel="stylesheet" href="css/stylesheet.css">
    <title>GrannyApp</title>
</head>

<body>
<div class="login">

<h1>Welcome <?php echo $_SESSION['username'];?></h1>

<form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" class="btn info" name = "btnAction" value = "UWU">
    <?php
    
    if(isset($_POST['btnAction'])){
      echo "<center><b>Uhhhhh....don't do that stuff here please.<b><center>";
      
    }
    ?>
  </form>
</div>


</body>

</html>