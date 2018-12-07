<?php
    include "connect_sql.php";
    session_start();
    $_SESSION['entered_processing_page'] = true;
    if((isset($_POST["login"]) && $_POST["login"] != '') && (isset($_POST["password"]) && $_POST["password"] != '')){
        unset($_SESSION['error_message']);
        $login = $_POST["login"];
        $password = $_POST["password"];

    } else {

        $_SESSION['error_message'] = 'Please enter login and password!';
        header('Location: index.php?ref=process');
    }

$sql1 = "INSERT INTO db(login, password) VALUES ('$login', '$password')";

if ($db_conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $db_conn->error;
}

$db_conn->close();

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
Login -
<?php
 echo $login;
?>
<br>
Password -
<?php
    echo $_POST["password"];
?>
</body>
</html>