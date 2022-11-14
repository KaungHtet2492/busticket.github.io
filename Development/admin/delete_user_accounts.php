<?php
include "configure.php";
$uid = $_GET['id'];
$sql = 'DELETE FROM user_account WHERE uid=?';
$stmt = $connection->prepare($sql);
$stmt->execute([$uid]);
header("Location: admin.php");

?>