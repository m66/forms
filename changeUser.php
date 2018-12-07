<?php
include "connect_sql.php";

$sql = "UPDATE db SET login = '" . $_POST['login'] . "', password = '" . $_POST['password'] . "' WHERE id = '" . $_POST['id'] . "'";

if ($db_conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db_conn->error;
}
?>