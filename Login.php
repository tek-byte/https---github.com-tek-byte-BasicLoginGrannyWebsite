<?php include_once('config.php'); 

if( !isset( $_SESSION ) ) {
    session_start();
}

?>

<html lang="en">
<head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>GrannyApp</title>
</head>

<body>
<div class="login">
    <h1>Login & Register</h1>
    <form action = "<?php $_SERVER['PHP_SELF']; ?>" method = "post">
        <input type = "text" name = "txtUsername" placeholder="Username">
        <input type = "password" name = "txtPassword" placeholder="password"><br>
        <input type="submit" name = "btnSubmit" value = "Login">
        <input type="submit" name = "btnRegister" value = "Register">
    </form>

</div>

</body>

</html>

<?php
if(isset($_POST['btnRegister']))
{
    $un = $_POST['txtUsername'];
    $pw = $_POST['txtPassword'];

    if($un != ""||$pw!="")
    {
        if(!in_array($un, $_SESSION['arrUsername']))
        {

            array_push($_SESSION['arrUsername'],$un);
            array_push($_SESSION['arrPassword'],$pw);
   
            print_r($_SESSION['arrUsername']);
     
        }

    }
}

if(isset($_POST['btnSubmit']))
{
    $un = $_POST['txtUsername'];
    $pw = $_POST['txtPassword'];

    if(!empty($_POST['txtUsername']) || !empty($_POST['txtPassword'])) {
        
        for($x=0; $x < count($_SESSION['arrUsername']); $x++) {
            if($un == $_SESSION['arrUsername'][$x] && $pw == $_SESSION['arrPassword'][$x])
            {
                $_SESSION['username'] = $_POST['txtUsername'];
                header("Location: CorrectPass.php");
            }
            
        }
        print_r($_SESSION['arrUsername']);
    }
}

function Alert($msg)
{
    echo "<script>alert('$msg');</script>";
}

?>
