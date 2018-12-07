<?php
include "connect_sql.php";

if ($db_conn->connect_error) {
    echo "Connect error";
}

$sql = "SELECT * FROM db WHERE id=1";
$result = $db_conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['login']. " " .$row['password']."<br>";
}

?>

<?php

?>