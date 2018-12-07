<?php
    session_start();
   // var_dump($_SESSION); exit;
    if(!isset($_GET['ref']) || (isset($_GET['ref']) && $_GET['ref'] != 'process')){
        unset($_SESSION['error_message']);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="get_post.php" method="post">
    <?php echo (isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '') ?>
    <p>Login: <input type="text" name="login" ></p>
    <p>Password: <input type="password" name="password" ></p>
    <p><input type="submit"></p>
</form>
</body>
</html>